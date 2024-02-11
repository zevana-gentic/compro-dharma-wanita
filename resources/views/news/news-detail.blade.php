@extends('layouts.main')

@section('content')
    <section class="detail-berita">
        <div class="container">
            <div class="body detail-berita-content">
                <div class="row">
                    <div class="col-md-8">
                        <img src="{{ asset('uploads/'. $news->image_thumbnail) }}" alt="" class="mb-3">
                        <p>{!! $news->content !!}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="header-berita-terbaru text-center">Berita Terbaru</div>
                        <div class="cards">
                            @foreach ($recent_news as $item)
                                <div class="mt-3">
                                    <a href="" class="card-berita-terbaru">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('uploads/'. $news->image_thumbnail) }}" alt="">
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
