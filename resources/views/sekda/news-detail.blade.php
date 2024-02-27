@extends('layouts.main')

@section('content')
    <section class="detail-berita">
        <div class="container">
            <div class="body detail-berita-content">
                <div class="row">
                    <div class="col-md-8">
                        <img src="{{ asset('uploads/'. $news->image_thumbnail) }}" alt="" class="mb-3">
                        <span class="date-author"><i class="fa-regular fa-calendar me-1"></i>{{ $news->created_at->format("j M Y"); }}</span>
                        <span class="date-author"><i class="fa-solid fa-user me-1"></i>{{ $news->author }}</span>
                        <span class="date-author"><i class="fa-solid fa-layer-group me-1"></i></i>{{ $news->category }}</span>
                        <div class="title mt-3">{{ $news->title }}</div>
                        <p>{!! $news->content !!}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="header-berita-terbaru text-center">Berita Terbaru</div>
                        <div class="cards">
                            @foreach ($recent_news as $item)
                                <div class="mt-3">
                                    <a href="{{ route('pages.news-detail', ['slug' => $item->slug]) }}" class="card-berita-terbaru">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('uploads/'. $item->image_thumbnail) }}" height="100" alt="">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-berita-body d-flex flex-column justify-content-center">
                                                    <div class="title">{{ $item->title }}.</div>
                                                    <div class="date">{{ $item->created_at->format("j M Y") }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
