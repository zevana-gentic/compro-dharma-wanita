@extends('layouts.admin-dashboard')
@section('title')
    Detail Anggota DWP
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="banner" style="width: 100%;">
                <img src="{{ asset('assets/banner.png') }}" alt=""
                    style="width: 100%; height:250px; border-radius: 1em; object-fit: cover; object-position: center;">
            </div>
            <div class="profile w-100 d-flex flex-column align-items-center">
                <img src="https://ui-avatars.com/api/?background=f9c346&size=30&name={{ str_replace(' ', '+', $member->name) }}"
                    width="150" height="150" alt=""
                    style="border-radius: 100%; border: 5px solid white; margin-top: -75px;">
                <div class="name mt-2" style="font-size: 2rem; font-weight: 600;">{{ $member->name }}</div>
                <div class="email" style="font-size: 1rem;">{{ $member->email }}</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="detail-profile mt-4 card p-4">
                    <div class="section-name text-center mb-1" style="font-size: 2rem; font-weight: 800;">PROFIL</div>
                    <div class="member-name" style="font-weight: 800;">NAMA MEMBER :</div>
                    <div class="mamber-name">{{ $member->name }}</div>
                    <hr />
                    <div class="member-name" style="font-weight: 800;">EMAIL :</div>
                    <div class="mamber-name">{{ $member->email }}</div>
                    <hr />
                    <div class="member-name" style="font-weight: 800;">TANGGAL DAFTAR :</div>
                    <div class="mamber-name">{{ $member->created_at->format('j M Y') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
