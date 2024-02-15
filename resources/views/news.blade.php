@extends('layouts.main')

@section('content')
    <section class="berita">
        <div class="container">
            @include('components.section-header')
            <div class="body berita-content">
                <div class="row">
                    @foreach ($news as $item)
                        <div class="col-md-3">
                            <div class="card my-3">
                                <img src="{{ asset('uploads/'. $item->image_thumbnail) }}" class="img-berita" alt="" />
                                <div class="card-body">
                                    <div class="title-body">{{ $item->title }}</div>
                                    <div class="card-text my-2">
                                        <p>
                                             {!! $item->content !!}
                                        </p>
                                    </div>
                                    <div class="d-flex mt-3 mb-2">
                                        <div class="date w-50 h-25 d-flex align-items-center">
                                            <i class="fa-regular fa-calendar"></i>
                                            <div class="ms-1">{{ $item->created_at->format("j M Y"); }}</div>
                                        </div>
                                        <a href="{{ route('pages.news-detail', ['slug' => $item->slug]) }}" class="selengkapnya w-50 text-end">Selengkapnya
                                            <i class="fa-solid fa-angle-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if ($news->count() > 0)
                        <div class="mt-5">
                            {{ $news->links('components.pagination') }}
                        </div>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
