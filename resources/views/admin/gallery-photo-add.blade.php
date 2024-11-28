@extends('layouts.admin-dashboard')

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

            @if ($msg = Session::get('success'))
                <div class="my-3 alert alert-success alert-dismissible show" role="alert">
                    <strong>{{ $msg }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif ($msg = Session::get('error'))
                <div class="my-3 alert alert-danger alert-dismissible show" role="alert">
                    <strong>{{ $msg }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('gallery.photo.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="photo" class="form-label">Gambar<span class="text-sm text-danger">*</span></label>
                            @error('photo')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                            <input name="photo" type="file" class="form-control" id="myDropify">
                            <small class="text-primary">(Format: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small>
                        </div>
                        <div class="mb-3">
                            <label for="short_desc">Keterangan Gambar<span class="text-sm text-danger">*</span></label>
                            <textarea class="form-control" name="short_desc">{{ old('short_desc') }}</textarea>
                            @error('short_desc')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('gallery.photo.list') }}" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah</button>
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
