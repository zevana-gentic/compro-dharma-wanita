@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
        <label for="confirm_password" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="confirm_password">
    </div>
    <div class="mb-3">
        <a href="/login">Sudah mempunyai akun? Masuk</a>
    </div>
    <button type="submit" class="btn-auth fw-bold w-100">Submit</button>
</form>
@endsection
