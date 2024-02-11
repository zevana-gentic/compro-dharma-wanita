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
                    <h4>Ubah Data Foto</h4>
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
                    <form action="{{ route('gallery.photo.update', $gallery_photo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="photo" class="form-label">Gambar<span class="text-sm text-danger">*</span></label>
                            @error('photo')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                            <input name="photo" type="file" class="form-control" id="myDropify" data-default-file="{{ asset('uploads/'.$gallery_photo->photo) }}"">
                            <small class="text-primary">(Format: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('gallery.photo.list') }}" class="btn btn-secondary mr-2">Kembali</a>
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
