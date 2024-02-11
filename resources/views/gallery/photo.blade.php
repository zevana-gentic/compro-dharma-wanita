@extends('layouts.main')

@section('content')
    <div class="galeri-foto">
        <div class="container">
            @include('components.section-header')
            <div class="body d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center">
                    <div id="gallery" class="text-center">
                        @foreach ($gallery_photos as $item)
                            <a href="{{ asset('uploads/'. $item->photo) }}">
                                <img src="{{ asset('uploads/'. $item->photo) }}" height="250" alt="" class="mt-1">
                            </a>
                        @endforeach
                    </div>
                </div>
                @if ($gallery_photos->count() > 0)
                    <div class="mt-5">
                        {{ $gallery_photos->links('components.pagination') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
