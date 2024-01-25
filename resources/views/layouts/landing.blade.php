@extends('main')
@section('title')
    Beranda
@endsection
@section('content')
    <!-- Carousel -->
    <section class="carousel">
        <div class="container">
            <div class="row">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <div class="bg-carousel"></div>
                            <div class="carousel-body">
                                <div class="title">Lorem</div>
                                <div class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                    labore!</div>
                            </div>
                            <img src="assets/slider1.png" class="d-block w-100" alt="" />
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="bg-carousel"></div>
                            <div class="carousel-body">
                                <div class="title">Lorem</div>
                                <div class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                    labore!</div>
                            </div>
                            <img src="assets/slider1.png" class="d-block w-100" alt="" />
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="bg-carousel"></div>
                            <div class="carousel-body">
                                <div class="title">Lorem</div>
                                <div class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                                    labore!</div>
                            </div>
                            <img src="assets/slider1.png" class="d-block w-100" alt="" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/notfound.png" class="img-about" alt="" />
                    </div>
                    <div class="col-md-7">
                        <div class="about-body">
                            <header>Tentang Kami</header>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequuntur magnam eveniet laborum sequi, error alias tempore
                                odio similique blanditiis aut voluptatibus, ipsam neque. Ad
                                sunt velit magnam iusto harum soluta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita -->
    <section class="berita">
        <div class="container">
            <header class="text-center">Berita Terbaru</header>
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success my-3">Lihat Semua</button>
            </div>
            <div class="berita-content">
                <div class="row">
                    <div class="col-md-3">
                        @include('components.card')
                    </div>
                    <div class="col-md-3">
                        @include('components.card')
                    </div>
                    <div class="col-md-3">
                        @include('components.card')
                    </div>
                    <div class="col-md-3">
                        @include('components.card')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja -->
    <section class="proker">
        <div class="container">
            <header class="text-center mb-5">Program Kerja</header>
            <div class="proker-content my-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="proker-card">
                            <div class="proker-card-detail">
                                <img src="{{ asset('assets/pendidikan.png') }}" alt="" />
                                <p>Bidang Pendidikan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proker-card">
                            <div class="proker-card-detail">
                                <img src="{{ asset('assets/sosial.png') }}" alt="" />
                                <p>Bidang Sosial Budaya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proker-card card-last">
                            <div class="proker-card-detail">
                                <img src="{{ asset('assets/ekonomi.png') }}" alt="" />
                                <p>Bidang Ekonomi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/notfound.png" alt="" class="img-footer" />
                    <p class="title mt-2">Dharma Wanita Persatuan</p>
                    <p class="mt-2">Alamat</p>
                    <div class="sosmed">
                        <a href="" class="sosmed"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <header class="mb-2">Link Terkait</header>
                    <div class="section">
                        <div class="footer-body">Profil</div>
                        <div class="footer-body">Unsur Pelaksana</div>
                        <div class="footer-body">Program Kerja</div>
                        <div class="footer-body">Berita</div>
                        <div class="footer-body">Galeri</div>
                        <div class="footer-body">Informasi</div>
                        <div class="footer-body">Kontak Kami</div>
                    </div>
                </div>
                <div class="copyright text-center my-5">2024 Copyright - Lorem ipsum</div>
            </div>
        </div>
    </footer>
@endsection
