@extends('layouts.main')

@section('content')
    <div class="galeri-foto">
        <div class="container">
            @include('components.section-header')
            <div class="body d-flex flex-column align-items-center">
                <div class="d-flex justify-content-center">
                    <div id="gallery" class="text-center">
                        @forelse ($gallery_photos as $item)
                            <a href="{{ asset('uploads/' . $item->photo) }}" data-sub-html=".caption">
                                <img src="{{ asset('uploads/' . $item->photo) }}" height="250" alt="" class="mt-1">
                                <div class="caption d-none">
                                    <h4>{{ @$item->short_desc }}</h4>
                                </div>
                            </a>
                        @empty
                            <div class="text-center">Belum ada data foto.</div>
                        @endforelse
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
