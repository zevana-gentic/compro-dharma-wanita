@extends('layouts.main')

@section('content')
    <section class="detail-berita">
        <div class="container">
            <div class="body detail-berita-content">
                <div class="row">
                    <div class="col-md-8">
                        <img src="{{ asset('assets/notfound.png') }}" alt="" class="mb-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt quas iste rem eos ad
                            dolores id placeat. Maxime debitis adipisci odit totam harum impedit earum optio, nesciunt non
                            ad eaque sapiente soluta excepturi sunt, obcaecati ipsum quasi repellendus architecto officia
                            saepe autem vitae qui? Ipsam minima obcaecati quas mollitia.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt quas iste rem eos ad
                            dolores id placeat. Maxime debitis adipisci odit totam harum impedit earum optio, nesciunt non
                            ad eaque sapiente soluta excepturi sunt, obcaecati ipsum quasi repellendus architecto officia
                            saepe autem vitae qui? Ipsam minima obcaecati quas mollitia.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt quas iste rem eos ad
                            dolores id placeat. Maxime debitis adipisci odit totam harum impedit earum optio, nesciunt non
                            ad eaque sapiente soluta excepturi sunt, obcaecati ipsum quasi repellendus architecto officia
                            saepe autem vitae qui? Ipsam minima obcaecati quas mollitia.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="header-berita-terbaru text-center">Berita Terbaru</div>
                        <div class="cards">
                            <div class="mt-3">
                                <a href="" class="card-berita-terbaru">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('assets/notfound.png') }}" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-berita-body d-flex flex-column justify-content-center">
                                                <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                                <div class="date">05 Feb 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href="" class="card-berita-terbaru">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('assets/notfound.png') }}" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-berita-body d-flex flex-column justify-content-center">
                                                <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                                <div class="date">05 Feb 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
