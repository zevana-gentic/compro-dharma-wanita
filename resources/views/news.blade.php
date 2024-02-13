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
                                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam nam commodi rerum consequatur praesentium perspiciatis debitis doloremque hic, aut optio veritatis laudantium molestiae. Commodi vel qui porro repudiandae, quia eligendi perferendis suscipit? Mollitia rerum dolore reprehenderit, asperiores repellendus a, nihil nisi illum voluptas ipsa impedit sequi reiciendis error illo ut. Sed a reiciendis, doloribus quaerat possimus corporis. Iure odit laudantium quos corporis quod ipsum enim asperiores quis, minus aspernatur obcaecati a dicta eaque nesciunt voluptatem omnis cum magnam possimus accusamus nam quisquam est! Consequatur deleniti minima cumque modi delectus repellendus explicabo! Ad similique quae consectetur laboriosam impedit eveniet architecto officiis sit, pariatur fuga at non tempore accusamus rem voluptatum dolores tempora sint magnam sed minus. Cum tempore ex necessitatibus suscipit iusto enim, blanditiis sint veritatis ut natus. Officia assumenda natus unde nihil sapiente nostrum doloremque, modi totam molestiae aperiam delectus, error obcaecati pariatur, officiis architecto facilis alias dolores vero autem?
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
