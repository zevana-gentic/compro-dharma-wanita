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
                    <h4>Tambah Galeri - Video</h4>
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
                    <form action="{{ route('gallery.video.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="video" class="form-label">Link Video<span class="text-sm text-danger">*</span></label>
                            <div class="">
                                <small class="text-primary">(Link Video embed dari Youtube)</small>
                            </div>
                            <textarea class="form-control" name="video" cols="30" rows="10" placeholder="<iframe width='' height='' src=.....</iframe>">{{ old('video') }}</textarea>
                            @error('video')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('gallery.video.list') }}" class="btn btn-secondary mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


