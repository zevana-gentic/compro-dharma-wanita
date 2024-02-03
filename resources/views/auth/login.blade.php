@extends('layouts.auth')

@section('title')
    Masuk
@endsection

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <div class="form-group" style="position: relative;">
                <input name="password" type="password" class="form-control" id="password-field">
                <span toggle="#password-field" class="fa-solid fa-eye toggle-password"
                    style="position: absolute; right:20px; top:10px;">
                </span>
            </div>
        </div>
        <div class="mb-3">
            <a href="" class="text-decoration-none" style="color:#FFBB5C;"><b>Lupa Password</b></a>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-auth fw-bold w-100">Masuk</button>
        </div>
    </form>
    <p class="text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none" style="color:#FFBB5C;"><b>Daftar</b></a></p>
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
</script>
@endsection
