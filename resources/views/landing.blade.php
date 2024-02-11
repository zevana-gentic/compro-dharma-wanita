@extends('layouts.main')

@section('title')
    Beranda
@endsection

@section('content')

    <!-- Carousel -->
    <section class="carousel">
        <div class="row">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            @forelse ($sliders as $item)
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="bg-carousel"></div>
                        <div class="carousel-body">
                            <div class="title">{{ $item->title }}</div>
                            <p>
                                {{ $item->short_desc }}
                            </p>
                        </div>
                        <img src="{{ asset('uploads/'.$item->image) }}" class="d-block w-100" alt="" />
                    </div>
                </div>
            @empty
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="bg-carousel"></div>
                        <div class="carousel-body">
                            <div class="title">Lorem</div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Fugiat, labore!
                            </p>
                        </div>
                        <img src="assets/slider1.png" class="d-block w-100" alt="" />
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="bg-carousel"></div>
                        <div class="carousel-body">
                            <div class="title">Lorem</div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Fugiat, labore!
                            </p>
                        </div>
                        <img src="assets/slider1.png" class="d-block w-100" alt="" />
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="bg-carousel"></div>
                        <div class="carousel-body">
                            <div class="title">Lorem</div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Fugiat, labore!
                            </p>
                        </div>
                        <img src="assets/slider1.png" class="d-block w-100" alt="" />
                    </div>
                </div>
            @endforelse
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleInterval"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
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
                <a href="{{ route('pages.news') }}" class="btn-see-all my-3">Lihat Semua</a>
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

    <!-- Foto Kegiatan -->
    <section class="kegiatan">
        <div class="container">
            <header class="text-center">Foto Kegiatan</header>
            <div class="kegiatan-content my-4">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="kegiatan-card">
                            <img src="assets/notfound.png" alt="" height="200px">
                        </div>
                        <div class="kegiatan-card">
                            <img src="assets/notfound.png" alt="" height="200px">
                        </div>
                        <div class="kegiatan-card">
                            <img src="assets/notfound.png" alt="" height="200px">
                        </div>
                        <div class="kegiatan-card">
                            <img src="assets/notfound.png" alt="" height="200px">
                        </div>
                        <div class="kegiatan-card">
                            <img src="assets/notfound.png" alt="" height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja -->
    <section class="proker py-4">
        <div class="container">
            <header class="text-center mb-1">Program Kerja</header>
            <div class="proker-content pb-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="proker-card">
                            <div class="proker-card-detail mt-4">
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg fill="#000000" width="80px" height="80px" viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M197.769 791.767l60.672-286.853c2.341-11.066-4.733-21.934-15.799-24.275s-21.934 4.733-24.275 15.799l-60.672 286.853c-2.341 11.066 4.733 21.934 15.799 24.275s21.934-4.733 24.275-15.799zm571.063-286.786l61.778 287.068c2.38 11.058 13.273 18.093 24.33 15.713s18.093-13.273 15.713-24.33l-61.778-287.068c-2.38-11.058-13.273-18.093-24.33-15.713s-18.093 13.273-15.713 24.33z" />
                                    <path
                                        d="M967.45 386.902L535.9 208.126c-10.609-4.399-30.569-4.442-41.207-.088L57.821 386.901l436.881 178.857c10.624 4.355 30.583 4.313 41.207-.085L967.45 386.901zM551.583 603.516c-20.609 8.533-51.787 8.599-72.409.145L24.437 417.494c-32.587-13.359-32.587-47.847.009-61.188l454.73-186.174c20.641-8.448 51.818-8.382 72.407.156l448.836 185.936c32.466 13.442 32.466 47.913.004 61.354l-448.84 185.938zm288.673 166.569c-98 57.565-209.669 88.356-325.888 88.356-116.363 0-228.162-30.866-326.246-88.564-9.749-5.735-22.301-2.481-28.036 7.268s-2.481 22.301 7.268 28.036c104.336 61.377 223.297 94.22 347.014 94.22 123.564 0 242.386-32.763 346.634-93.998 9.753-5.729 13.015-18.279 7.286-28.032s-18.279-13.015-28.032-7.286z" />
                                    <path
                                        d="M983.919 383.052v296.233c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V383.052c0-11.311-9.169-20.48-20.48-20.48s-20.48 9.169-20.48 20.48z" />
                                </svg>
                                <p>Bidang Pendidikan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proker-card">
                            <div class="proker-card-detail mt-4">
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg width="80px" height="80px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 18C3 15.3945 4.66081 13.1768 6.98156 12.348C7.61232 12.1227 8.29183 12 9 12C9.70817 12 10.3877 12.1227 11.0184 12.348C11.3611 12.4703 11.6893 12.623 12 12.8027C12.3107 12.623 12.6389 12.4703 12.9816 12.348C13.6123 12.1227 14.2918 12 15 12C15.7082 12 16.3877 12.1227 17.0184 12.348C19.3392 13.1768 21 15.3945 21 18V21H15.75V19.5H19.5V18C19.5 15.5147 17.4853 13.5 15 13.5C14.4029 13.5 13.833 13.6163 13.3116 13.8275C14.3568 14.9073 15 16.3785 15 18V21H3V18ZM9 11.25C8.31104 11.25 7.66548 11.0642 7.11068 10.74C5.9977 10.0896 5.25 8.88211 5.25 7.5C5.25 5.42893 6.92893 3.75 9 3.75C10.2267 3.75 11.3158 4.33901 12 5.24963C12.6842 4.33901 13.7733 3.75 15 3.75C17.0711 3.75 18.75 5.42893 18.75 7.5C18.75 8.88211 18.0023 10.0896 16.8893 10.74C16.3345 11.0642 15.689 11.25 15 11.25C14.311 11.25 13.6655 11.0642 13.1107 10.74C12.6776 10.4869 12.2999 10.1495 12 9.75036C11.7001 10.1496 11.3224 10.4869 10.8893 10.74C10.3345 11.0642 9.68896 11.25 9 11.25ZM13.5 18V19.5H4.5V18C4.5 15.5147 6.51472 13.5 9 13.5C11.4853 13.5 13.5 15.5147 13.5 18ZM11.25 7.5C11.25 8.74264 10.2426 9.75 9 9.75C7.75736 9.75 6.75 8.74264 6.75 7.5C6.75 6.25736 7.75736 5.25 9 5.25C10.2426 5.25 11.25 6.25736 11.25 7.5ZM15 5.25C13.7574 5.25 12.75 6.25736 12.75 7.5C12.75 8.74264 13.7574 9.75 15 9.75C16.2426 9.75 17.25 8.74264 17.25 7.5C17.25 6.25736 16.2426 5.25 15 5.25Z"
                                        fill="#080341" />
                                </svg>
                                <p>Bidang Sosial Budaya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="proker-card card-last">
                            <div class="proker-card-detail mt-4">
                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <svg fill="#000000" height="80px" width="80px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M271.294,242.104v-54.343c25.526,4.476,25.531,20.337,25.531,26.111h30.589c0-31.9-20.682-52.481-56.12-56.962v-21.724
                  h-30.589v21.724c-35.437,4.481-56.12,25.061-56.12,56.962s20.682,52.48,56.12,56.961v54.344
                  c-25.526-4.476-25.531-20.337-25.531-26.111h-30.589c0,31.9,20.682,52.481,56.12,56.962v21.724h30.589v-21.724
                  c35.437-4.481,56.12-25.061,56.12-56.962C327.414,267.165,306.731,246.586,271.294,242.104z M240.705,239.982
                  c-25.526-4.475-25.531-20.335-25.531-26.11c0-5.774,0.005-21.635,25.531-26.111V239.982z M271.294,325.177v-52.222
                  c25.526,4.476,25.531,20.337,25.531,26.111S296.82,320.701,271.294,325.177z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M361.391,41.149H150.609c-60.355,0-109.46,49.104-109.46,109.461v51.652L21.628,182.74L0,204.371l56.444,56.444
                  l56.444-56.444l-21.63-21.63l-19.52,19.52V150.61c0-43.489,35.381-78.872,78.871-78.872h210.782
                  c43.488,0,78.871,35.381,78.871,78.872v78.379h30.589V150.61C470.851,90.253,421.747,41.149,361.391,41.149z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M455.556,259.595l-56.443,56.443l21.63,21.629l19.52-19.52v43.244c0,43.488-35.381,78.871-78.871,78.871H150.609
                  c-43.488,0-78.871-35.381-78.871-78.871V291.42H41.149v69.971c0,60.356,49.104,109.46,109.46,109.46h210.782
                  c60.355,0,109.46-49.103,109.46-109.46v-43.245l19.521,19.52L512,316.038L455.556,259.595z" />
                                        </g>
                                    </g>
                                </svg>
                                <p>Bidang Ekonomi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
