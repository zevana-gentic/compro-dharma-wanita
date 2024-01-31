@extends('layouts.main')

@section('content')
<div class="kontak">
    <div class="container">
      <div class="header">
        <div class="title mt-3">Kontak</div>
        <div class="sub-title mb-5">Hubungi Kami</div>
      </div>
      <div class="body d-flex flex-column align-items-center">
        <div class="title mb-5">Dharma Wanita Persatuan</div>
        <form>
          <div class="input-group mb-4">
            <!-- <label for="name" class="form-label">Nama</label> -->
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Nama"
            />
            <span class="input-group-text"
              ><i><i class="fa-solid fa-user"></i></i
            ></span>
          </div>
          <div class="input-group mb-4">
            <!-- <label for="pesan">Pesan</label> -->
            <textarea
              class="form-control"
              placeholder="Pesan"
              id="pesan"
            ></textarea>
          </div>
          <div class="button-kirim d-flex justify-content-center">
            <button type="submit" class="btn-kirim">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
