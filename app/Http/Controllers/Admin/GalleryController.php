<?php

namespace App\Http\Controllers\Admin;

use File;
use Storage;
use Validator;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    // Photo
    public function photo_list()
    {
        $data['photos'] = Gallery::where('category', 'Foto')->paginate(10)->withQueryString();

        return view('admin.gallery-photo-list', $data);
    }

    public function photo_add()
    {
        return view('admin.gallery-photo-add');
    }

    public function photo_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo'   => 'mimes:jpg,jpeg,png|max:2048',
        ],[
            'photo.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'photo.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        if ($request->hasFile('photo')) {
            $filename = Storage::disk('public_uploads')->put('gallery-photos', $request->file('photo'));
            $data['photo'] = $filename;
        }

        $data['category'] = 'Foto';

        Gallery::create($data);

        return redirect()->route('gallery.photo.list')->with(['success' => 'Foto baru berhasil ditambahkan.']);
    }

    public function photo_edit($id)
    {
        $data['gallery_photo'] = Gallery::findOrFail($id);

        return view('admin.gallery-photo-edit', $data);
    }

    public function photo_update(Request $request)
    {
        $gallery_photo = Gallery::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'photo'          => 'mimes:jpg,jpeg,png|max:2048',
        ],[
            'photo.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'photo.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        if ($request->hasFile('photo')) {
            $filename = Storage::disk('public_uploads')->put('gallery-photos', $request->file('photo'));
            $data['photo'] = $filename;
            if (@$gallery_photo->photo) {
                File::delete('./uploads/'.$gallery_photo->photo);
            }
        }

        $data['category'] = 'Foto';

        $gallery_photo->update($data);

        return redirect()->route('gallery.photo.edit', $gallery_photo->id)->with(['success' => 'Foto baru berhasil diubah.']);
    }

    public function photo_delete(Request $request)
    {
        $gallery_photo = Gallery::find($request->id);
        File::delete('./uploads/'.$gallery_photo->photo);
        $gallery_photo->delete();

        return redirect()->route('gallery.photo.list')->with(['success' => 'Data foto berhasil dihapus.']);
    }

    // Video
    public function video_list()
    {
        $data['videos'] = Gallery::where('category', 'Video')->paginate(10)->withQueryString();
        return view('admin.gallery-video-list' ,$data);
    }

    public function video_add()
    {
        return view('admin.gallery-video-add');
    }

    public function video_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video'             => 'required',
        ],[
            'video.required'    => 'Link Video harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data['video'] = $request->video;
        $data['category'] = 'Video';

        Gallery::create($data);

        return redirect()->route('gallery.video.list')->with(['success' => 'Video baru berhasil ditambahkan.']);
    }

    public function video_edit($id)
    {
        $data['gallery_video'] = Gallery::findOrFail($id);

        return view('admin.gallery-video-edit', $data);
    }

    public function video_update(Request $request)
    {
        $gallery_video = Gallery::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'video'             => 'required',
        ],[
            'video.required'    => 'Link Video harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data['video'] = $request->video;
        $data['category'] = 'Video';

        $gallery_video->update($data);

        return redirect()->route('gallery.video.edit', $gallery_video->id)->with(['success' => 'Video baru berhasil diubah.']);
    }

    public function video_delete(Request $request)
    {
        $gallery_video = Gallery::find($request->id);
        $gallery_video->delete();

        return redirect()->route('gallery.video.list')->with(['success' => 'Data video berhasil dihapus.']);
    }
}
