@extends('layouts.admin-dashboard')
@section('title')
    List Data Galeri - Video
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="justify-content-between align-items-center flex-wrap grid-margin">
            <h4>List Data Galeri - Video</h4>
            <div class="row mt-3">
                <div class="col-md-3">
                    <a href="" class="btn btn-primary btn-md" title="Tambah Berita">
                        <i class="mr-1" data-feather="plus-circle" style="width: 20px; height:20px;"></i>
                        Tambah Video
                    </a>
                </div>
                {{-- <div class="col-md-6">
                    <form action="" method="GET">
                        <div class="input-group ml-1 mb-3 row justify-content right">
                            <input type="text" class="form-control" placeholder="Cari Foto" id="name"
                                name="name">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" value="search"
                                    title="Search">Search</button>
                            </div>
                        </div>
                    </form>
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

            </div>
        </div>
    </div>
</div>
@endsection
