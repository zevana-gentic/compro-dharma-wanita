<?php

namespace App\Http\Controllers\Admin;

use Storage;
use Validator;
use Str;
use File;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function news_list()
    {
        $data['news'] = News::paginate(10)->withQueryString();

        return view('admin.news-list', $data);
    }

    public function news_add()
    {
        return view('admin.news-add');
    }

    public function news_submit(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'image_thumbnail'   => 'mimes:jpg,jpeg,png|max:2048',
            'title'             => 'required',
            'category'          => 'required',
            'author'            => 'required',
            'content'           => 'required',
        ],[
            'image_thumbnail.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'image_thumbnail.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'title.required'           => 'Judul berita harus diisi.',
            'category.required'        => 'Kategori harus diisi.',
            'author.required'          => 'Penulis harus diisi.',
            'content.required'         => 'Konten harus diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data = $request->all();

        $data['slug'] = Str::slug($request->title).'-'.Str::random(5);

        if ($request->image_thumbnail) {
            $filename = Storage::disk('public_uploads')->put('image-thumbnail', $request->image_thumbnail);
            $data['image_thumbnail'] = $filename;
        }

        News::create($data);

        return redirect()->route('news.list')->with(['success' => 'Berita baru berhasil ditambahkan.']);
    }

    public function news_edit($id)
    {
        $data['news'] = News::find($id);

        return view('admin.news-edit', $data);
    }

    public function news_update(Request $request)
    {
        $data = $request->all();
        $news = News::find($request->id);

        $validator = Validator::make($request->all(), [
            'image_thumbnail'   => 'mimes:jpg,jpeg,png|max:2048',
            'title'             => 'required',
            'category'          => 'required',
            'author'            => 'required',
            'content'           => 'required',
        ],[
            'image_thumbnail.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'image_thumbnail.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'title.required'           => 'Judul berita harus diisi.',
            'category.required'        => 'Kategori harus diisi.',
            'author.required'          => 'Penulis harus diisi.',
            'content.required'         => 'Konten harus diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('news.edit', $news->id)
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data = $request->all();

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image_thumbnail')) {
            $filename = Storage::disk('public_uploads')->put('image-thumbnail', $request->image_thumbnail);
            $data['image_thumbnail'] = $filename;
            if (@$news->image_thumbnail) {
                File::delete('./uploads/'.$news->image_thumbnail);
            }
        }

        $news->update($data);

        return redirect()->route('news.edit', $news->id)->with(['success' => 'Data berita berhasil diubah.']);
    }

    public function news_delete(Request $request)
    {
        $news = News::find($request->id);
        File::delete('./uploads/'.$news->image_thumbnail);
        $news->delete();

        return redirect()->route('news.list')->with(['success' => 'Data berita berhasil dihapus.']);
    }

}
