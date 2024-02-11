@extends('layouts.admin-dashboard')
@section('title')
    Tambah Berita
@endsection

@section('css')
    <style>
        div.tagsinput {
            width: 100% !important;
            height: auto !important;
        }
    </style>
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4>Tambah Galeri - Foto</h4>
                    {{-- <div class="row mt-3">
                    <div class="col-md-2">
                        <a href="" class="btn btn-primary btn-md" title="Tambah Berita">
                            <i class="mr-1" data-feather="plus-circle" style="width: 20px; height:20px;"></i>
                            Tambah Berita
                        </a>
                    </div>
                    <div class="col-md-8">
                        <form action="{{ url()->current() }}" method="GET">
                            <div class="input-group ml-1 mb-3 row justify-content right">
                                <select name="category" id="category">
                                    <option value="">Pilih Kategori</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Cari Berita" name="q">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit" value="search" title="Search">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="my-3 alert alert-success alert-dismissible show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif ($message = Session::get('error'))
                <div class="my-3 alert alert-danger alert-dismissible show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    {{-- <h6 class="card-title">Basic Form</h6> --}}
                    <form class="">
                        <div class="mb-3">
                            <label for="image_thumbnail" class="form-label">Gambar Thumbnail<span class="text-sm text-danger">*</span></label>
                            <input name="image_thumbnail" type="file" class="form-control" id="myDropify">
                            <small class="text-primary">(Gambar berformat: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary mr-2">Kembali</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#myDropify').dropify({
            messages: {
                'default': 'Drag and drop file gambar atau klik disini.',
            }
        });
    </script>
@endsection
