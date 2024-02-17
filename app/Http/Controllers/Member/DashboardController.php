<?php

namespace App\Http\Controllers\Member;

use Auth;
use File;
use Storage;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function profil_edit()
    {
        $data['profile'] = Member::where('user_id', Auth::id())->first();

        return view('member.profil', $data);
    }

    public function profil_edit_submit(Request $request)
    {
        $profile = Member::where('user_id', Auth::id())->first();
        $user = User::find(Auth::id());

        $request->validate([
            'name' =>'required',
            'photo' => @$profile->photo ? 'mimes:jpg,jpeg,png,webp|max:2048' : 'required|mimes:jpg,jpeg,png,webp|max:2048',
        ],[
            'name.required' => 'Nama wajib diisi.',
            'photo.max' => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
			'photo.mimes' => 'Format file salah. Format file harus JPG atau PNG.',
            'photo.required' => 'Foto Profil wajib diisi.',
		]);

        $data = [
            'name' => $request->name
        ];

        if ($request->photo) {
            $photo = Storage::disk('public_uploads')->put('member-profile-photo', $request->photo);
            $data['photo'] = $photo;
            if (@$profile->photo) {
                File::delete('./uploads/'.$profile->photo);
            }
        }

        $user->update($data);

        Member::updateOrCreate(
            ['user_id' => Auth::id()],
            $data,
        );

        return redirect()->route('member.profil-edit')->with(['success' => 'Data berhasil disimpan.']);
    }
}
