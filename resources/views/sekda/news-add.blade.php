@extends('layouts.sekda-dashboard')

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
                    <h4>Tambah Berita</h4>
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
                    <form action="{{ route('sekda.news.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image_thumbnail" class="form-label">Gambar Thumbnail<span class="text-sm text-danger">*</span></label>
                            @error('image_thumbnail')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                            <input name="image_thumbnail" type="file" class="form-control" id="myDropify">
                            <small class="text-primary">(Format: jpg, jpeg atau png. Ukuran gambar maks. 2MB. Gambar menggunakan layout landscape)</small>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Berita<span class="text-sm text-danger">*</span></label>
                            <input name="title" type="text" class="form-control" id="title" autocomplete="off" placeholder="Masukkan Judul Berita" value="{{ old('title') }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category">Kategori<span class="text-sm text-danger">*</span></label>
                            <select name="category" class="form-select">
                                <option selected disabled>Pilih Kategori Berita</option>
                                <option {{ old('category') == 'Berita Internal' ? 'selected' : '' }} value="Berita Internal">Berita Internal</option>
                                <option {{ old('category') == 'Berita Eksternal' ? 'selected' : '' }} value="Berita Eksternal">Berita Eksternal</option>
                            </select>
                            @error('category')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author">Penulis<span class="text-sm text-danger">*</span></label>
                            <input class="form-control" name="author" type="text" required placeholder="Masukkan Nama Penulis" value="{{ old('author') }}">
                            @error('author')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content">Konten Berita<span class="text-sm text-danger">*</span></label>
                            <textarea class="form-control" name="content" id="tinymceExample">{{ old('content') }}</textarea>
                            @error('content')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('sekda.news.list') }}" class="btn btn-secondary mr-2">Kembali</a>
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
        tinymce.init({
            selector: '#tinymceExample',
            plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount',
            toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
            height: 800
        });

        $('#myDropify').dropify({
            messages: {
                'default': 'Drag and drop file gambar atau klik disini.',
            }
        });
    </script>
@endsection
