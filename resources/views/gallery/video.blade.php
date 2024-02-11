@extends('layouts.main')

@section('content')
    <div class="galeri-video">
        <div class="container">
            @include('components.section-header')
            <div class="body d-flex flex-wrap align-items-center justify-content-center">
                <iframe width="400" height="250" src="https://www.youtube.com/embed/npnp--SSx_8?si=DQ8FPA5e744gThGE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe>
                {{-- <iframe width="400" height="250" src="https://www.youtube.com/embed/npnp--SSx_8?si=DQ8FPA5e744gThGE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe>
                <iframe width="400" height="250" src="https://www.youtube.com/embed/npnp--SSx_8?si=DQ8FPA5e744gThGE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe>
                <iframe width="400" height="250" src="https://www.youtube.com/embed/npnp--SSx_8?si=DQ8FPA5e744gThGE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mx-1 my-1"></iframe> --}}
            </div>
        </div>
    </div>
@endsection
