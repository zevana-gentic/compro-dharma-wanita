@extends('layouts.auth')

@section('title')
    Daftar
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Terjadi kesalahan saat pengisian form.
                <br>
                Data yang masih salah akan ditandai dengan tulisan merah, silahkan cek kembali.
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama :</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <div class="form-group" style="position: relative;">
                <input name="password" type="password" class="form-control" id="password-field">
                <span toggle="#password-field" class="fa-solid fa-eye toggle-password"
                    style="position: absolute; right:20px; top:10px; cursor: pointer;">
                </span>
            </div>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Konfirmasi Password :</label>
            <div class="form-group mb-3" style="position: relative;">
                <input name="password_confirmation" type="password" class="form-control" required id="password-field-1">
                <span toggle="#password-field-1" class="fa fa-fw fa-eye field-icon toggle-password1"
                    style="position: absolute; right:20px; top:10px; cursor: pointer;">
                </span>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-auth fw-bold w-100">Daftar</button>
        </div>
    </form>
    <p class="text-center">Sudah mempunyai akun? <a href="{{ route('login') }}" class="text-decoration-none" style="color: #FFBB5C;"><b>Masuk</b></a></p>
@endsection

@section('js')
    <script>
         $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));

            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $(".toggle-password1").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endsection
