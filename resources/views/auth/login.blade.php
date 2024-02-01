@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <a href="/register">Belum mempunyai akun? Daftar</a>
        </div>
        <button type="submit" class="btn-auth fw-bold w-100">Submit</button>
    </form>
@endsection
