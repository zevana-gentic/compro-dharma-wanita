<?php

namespace App\Http\Controllers\Admin;

use File;
use Storage;
use Validator;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function slider_list()
    {
        $data['sliders'] = Slider::get();

        return view('admin.slider-list', $data);
    }

    public function slider_add()
    {
        return view('admin.slider-add');
    }

    public function slider_submit(Request $request)
    {
        $data = $request->all();

        $rules = [
            'title'           => 'required',
            // 'short_desc'   => 'required'
            'image'           => 'mimes:jpg,jpeg,png|max:2048'
        ];

        $message = [
            'title.required' => 'Judul Slider harus diisi.',
            'image.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'image.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
        ];

        $validator = Validator::make($data, $rules, $message);

        if ($validator->fails()) {
            return redirect()->route('slider.add')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $filename = Storage::disk('public_uploads')->put('slider-images', $request->file('image'));
            $data['image'] = $filename;
        }

        Slider::create($data);

        return redirect()->route('slider.list')->with(['success' => 'Slider baru berhasil ditambahkan.']);
    }

    public function slider_edit(Request $request)
    {
        $data['slider'] = Slider::findOrFail($request->id);

        return view('admin.slider-edit', $data);
    }

    public function slider_update(Request $request)
    {
        $data = $request->all();
        $slider = Slider::findOrFail($request->id);

        $rules = [
            'title'           => 'required',
            // 'short_desc'   => 'required'
            'image'           => 'mimes:jpg,jpeg,png|max:2048'
        ];

        $message = [
            'title.required' => 'Judul Slider harus diisi.',
            'image.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'image.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
        ];

        $validator = Validator::make($data, $rules, $message);

        if ($validator->fails()) {
            return redirect()->route('slider.edit', $slider->id)->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $filename = Storage::disk('public_uploads')->put('slider-images', $request->file('image'));
            $data['image'] = $filename;
            if (@$slider->image) {
                File::delete('./uploads/'.$slider->image);
            }

        }

        $slider->update($data);

        return redirect()->route('slider.edit', $slider->id)->with(['success' => 'Slider baru berhasil diubah.']);
    }

    public function slider_delete(Request $request)
    {
        $slider = Slider::find($request->id);
        File::delete('./uploads/'.$slider->image);
        $slider->delete();

        return redirect()->route('slider.list')->with(['success' => 'Data slider berhasil dihapus.']);
    }
}
