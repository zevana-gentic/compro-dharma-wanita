<?php

namespace App\Http\Controllers\Sekda;

use Storage;
use Validator;
use Str;
use File;
use Auth;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function news_list(Request $request)
    {
        $data['page_title'] = 'List Berita';

        $news = News::latest()->where('role', '3');

        if ($request->has('q') && $request->q != '') {
            $news = $news->where(function ($query) use($request) {
                $query->where('title',  'LIKE', '%' . $request->q . '%')
                        ->orWhere('author',  'LIKE', '%' . $request->q . '%');
            });
        }

        if ($request->has('category') && $request->category != '') {
            $news = $news->where('category', $request->category);
        }

        $data['news'] = $news->paginate(10)->withQueryString();

        return view('sekda.news-list', $data);
    }

    public function news_add()
    {
        $data['page_title'] = 'Tambah Berita';

        return view('sekda.news-add', $data);
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
            return redirect()->route('sekda.news.add')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data = $request->all();
        $data['role'] = Auth::user()->role;

        $data['slug'] = Str::slug($request->title).'-'.Str::random(5);

        if ($request->image_thumbnail) {
            $filename = Storage::disk('public_uploads')->put('image-thumbnail', $request->image_thumbnail);
            $data['image_thumbnail'] = $filename;
        }

        News::create($data);

        return redirect()->route('sekda.news.list')->with(['success' => 'Berita baru berhasil ditambahkan.']);
    }

    public function news_edit($id)
    {
        $data['page_title'] = 'Ubah Berita';
        $data['news'] = News::find($id);

        return view('sekda.news-edit', $data);
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
            return redirect()->route('sekda.news.edit', $news->id)
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data = $request->all();
        $data['role'] = Auth::user()->role;

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image_thumbnail')) {
            $filename = Storage::disk('public_uploads')->put('image-thumbnail', $request->image_thumbnail);
            $data['image_thumbnail'] = $filename;
            if (@$news->image_thumbnail) {
                File::delete('./uploads/'.$news->image_thumbnail);
            }
        }

        $news->update($data);

        return redirect()->route('sekda.news.edit', $news->id)->with(['success' => 'Data berita berhasil diubah.']);
    }

    public function news_delete(Request $request)
    {
        $news = News::find($request->id);
        File::delete('./uploads/'.$news->image_thumbnail);
        $news->delete();

        return redirect()->route('sekda.news.list')->with(['success' => 'Data berita berhasil dihapus.']);
    }

}
