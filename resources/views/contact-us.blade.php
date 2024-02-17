@extends('layouts.main')

@section('content')
    <div class="kontak">
        <div class="container">
            <div class="header">
                <div class="title mt-3">Kontak</div>
                <div class="sub-title mb-5">Hubungi Kami</div>
            </div>
            <div class="body">
                <div class="row mt-5">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="title mb-5">Dharma Wanita Persatuan Kota Magelang</div>
                        <form>
                            <div class="input-group mb-4">
                                <!-- <label for="name" class="form-label">Nama</label> -->
                                <input type="text" class="form-control" id="name" placeholder="Nama" />
                                <span class="input-group-text"><i><i class="fa-solid fa-user"></i></i></span>
                            </div>
                            <div class="input-group mb-4">
                                <!-- <label for="pesan">Pesan</label> -->
                                <textarea class="form-control" placeholder="Pesan" id="pesan"></textarea>
                            </div>
                            <div class="button-kirim d-flex justify-content-center">
                                <button type="submit" class="btn-kirim">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="location second">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <img src="{{ asset('assets/gedung-wanita-1.png') }}" alt="">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <img src="{{ asset('assets/gedung-wanita-2.png') }}" alt="">
                                </div>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.2448485732792!2d110.21731103978911!3d-7.47435411451766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a85f5f540a173%3A0xa969c44d8827a958!2sGedung%20Wanita%20Magelang!5e0!3m2!1sid!2sid!4v1708178137307!5m2!1sid!2sid"
                                class="location-maps mt-3" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
