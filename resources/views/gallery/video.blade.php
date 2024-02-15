@extends('layouts.main')

@section('content')
    <div class="galeri-video">
        <div class="container">
            @include('components.section-header')
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                {{-- <iframe width="400" height="250" src="https://www.youtube.com/embed/npnp--SSx_8?si=DQ8FPA5e744gThGE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe> --}}
                @foreach ($gallery_videos as $item)
                <iframe width="400" height="250" src="{!! $item->video !!}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe>
                @endforeach
            </div>
            @if ($gallery_videos->count() > 0)
                <div class="my-5">
                    {{ $gallery_videos->links('components.pagination') }}
                </div>
            @endif
        </div>
    </div>
@endsection
