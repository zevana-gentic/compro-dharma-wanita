@extends('layouts.main')

@section('content')
    <div class="galeri-foto">
        <div class="container">
            @include('components.section-header')
            <div class="body d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center">
                        <div id="gallery" class="text-center">
                            <a href="{{ asset('assets/notfound.png') }}">
                                <img src="{{asset('assets/notfound.png')}}" height="250" alt="" class="mt-1">
                            </a>
                            <a href="{{ asset('assets/notfound.png') }}">
                                <img src="{{asset('assets/notfound.png')}}" height="250" alt="" class="mt-1">
                            </a>
                            <a href="{{ asset('assets/notfound.png') }}">
                                <img src="{{asset('assets/notfound.png')}}" height="250" alt="" class="mt-1">
                            </a>
                            <a href="{{ asset('assets/notfound.png') }}">
                                <img src="{{asset('assets/notfound.png')}}" height="250" alt="" class="mt-1">
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
