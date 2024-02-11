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
                    <h4>Ubah Slider</h4>
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
                    <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Slider<span class="text-sm text-danger">*</span></label>
                            @error('image')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                            <input name="image" type="file" class="form-control" id="myDropify" data-default-file="{{ asset('uploads/'.$slider->image) }}">
                            <small class="text-primary">(Format: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul<span class="text-sm text-danger">*</span></label>
                            <input name="title" type="text" class="form-control" id="title" autocomplete="off" placeholder="Masukkan Judul" value="{{ $slider->title }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="short_desc" class="form-label">Deskripsi Singkat</label>
                            <input name="short_desc" type="text" class="form-control" id="title" autocomplete="off" placeholder="Masukkan Deskripsi Singkat" value="{{ $slider->short_desc }}">
                            @error('short_desc')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('slider.list') }}" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
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
