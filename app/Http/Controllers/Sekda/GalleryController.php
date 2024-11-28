<?php

namespace App\Http\Controllers\Sekda;

use File;
use Storage;
use Validator;
use Auth;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    // Photo
    public function photo_list()
    {
        $data['page_title'] = 'List Data Galeri - Foto';

        $data['photos'] = Gallery::where('role', '3')->where('category', 'Foto')->paginate(10)->withQueryString();

        return view('sekda.gallery-photo-list', $data);
    }

    public function photo_add()
    {
        $data['page_title'] = 'Tambah Data Galeri - Foto';

        return view('sekda.gallery-photo-add', $data);
    }

    public function photo_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo'   => 'mimes:jpg,jpeg,png|max:2048',
            'short_desc'    => 'required'
        ],[
            'photo.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'photo.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'short_desc.required'   => 'Keterangan Gambar wajib diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('sekda.gallery.photo.add')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        if ($request->hasFile('photo')) {
            $filename = Storage::disk('public_uploads')->put('gallery-photos', $request->file('photo'));
            $data['photo'] = $filename;
        }

        $data = [
            'role'       => Auth::user()->role,
            'category'   => 'Foto',
            'short_desc' => $request->short_desc
        ];

        Gallery::create($data);

        return redirect()->route('sekda.gallery.photo.list')->with(['success' => 'Foto baru berhasil ditambahkan.']);
    }

    public function photo_edit($id)
    {
        $data['page_title'] = 'Ubah Data Galeri - Foto';

        $data['gallery_photo'] = Gallery::findOrFail($id);

        return view('sekda.gallery-photo-edit', $data);
    }

    public function photo_update(Request $request)
    {
        $gallery_photo = Gallery::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'photo'          => 'mimes:jpg,jpeg,png|max:2048',
            'short_desc'    => 'required'
        ],[
            'photo.mimes'    => 'Format file salah. Format file harus JPG atau PNG.',
            'photo.max'      => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'short_desc.required'   => 'Keterangan Gambar wajib diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('sekda.gallery.photo.edit', $gallery_photo->id)
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

        $data = [
            'role'       => Auth::user()->role,
            'category'   => 'Foto',
            'short_desc' => $request->short_desc
        ];

        $gallery_photo->update($data);

        return redirect()->route('sekda.gallery.photo.edit', $gallery_photo->id)->with(['success' => 'Foto baru berhasil diubah.']);
    }

    public function photo_delete(Request $request)
    {
        $gallery_photo = Gallery::find($request->id);

        File::delete('./uploads/'.$gallery_photo->photo);

        $gallery_photo->delete();

        return redirect()->route('sekda.gallery.photo.list')->with(['success' => 'Data foto berhasil dihapus.']);
    }

    // Video
    public function video_list()
    {
        $data['page_title'] = 'List Data Galeri - Video';
        $data['videos'] = Gallery::where('role', '3')->where('category', 'Video')->paginate(10)->withQueryString();

        return view('sekda.gallery-video-list' ,$data);
    }

    public function video_add()
    {
        $data['page_title'] = 'Tambah Data Galeri - Video';

        return view('sekda.gallery-video-add', $data);
    }

    public function video_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video'             => 'required',
        ],[
            'video.required'    => 'Link Video harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sekda.gallery.video.add')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data['video'] = $request->video;
        $data['role'] = Auth::user()->role;
        $data['category'] = 'Video';

        Gallery::create($data);

        return redirect()->route('sekda.gallery.video.list')->with(['success' => 'Video baru berhasil ditambahkan.']);
    }

    public function video_edit($id)
    {
        $data['page_title'] = 'Ubah Data Galeri - Video';

        $data['gallery_video'] = Gallery::findOrFail($id);

        return view('sekda.gallery-video-edit', $data);
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
            return redirect()->route('sekda.gallery.video.edit', $gallery_video->id)
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat pengisian form. Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali form Anda.');
        }

        $data['video'] = $request->video;
        $data['role'] = Auth::user()->role;
        $data['category'] = 'Video';

        $gallery_video->update($data);

        return redirect()->route('sekda.gallery.video.edit', $gallery_video->id)->with(['success' => 'Video baru berhasil diubah.']);
    }

    public function video_delete(Request $request)
    {
        $gallery_video = Gallery::find($request->id);
        $gallery_video->delete();

        return redirect()->route('sekda.gallery.video.list')->with(['success' => 'Data video berhasil dihapus.']);
    }
}
