<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Validator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_submit(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth::user()->role == 2) {
                return redirect()->route('member.dashboard');
            }

        }

        return redirect()->route('login')->with([
            'error' => 'Email dan Kata Sandi tidak cocok.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ], [
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2,
            'remember_token' => md5(time())
        ]);

        return redirect()->route('login')->with(['success' => 'Registrasi akun berhasil. Silahkan Login.']);
        // return redirect()->route('login')->with(['success' => 'Registrasi akun berhasil. Silahkan cek email Anda untuk melakukan verifikasi akun.']);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        Auth::logout($user);

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
