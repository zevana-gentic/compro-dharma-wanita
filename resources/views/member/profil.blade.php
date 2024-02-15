@extends('layouts.member-dashboard')
@section('title')
    Edit Profil
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Profil</h6>
                        <form class="forms-sample" action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nama</label>
                                <input name="name" type="text" class="form-control" autocomplete="off" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="image">Foto</label>
                                <input name="image" type="file" class="form-control" id="myDropify">
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                {{-- <button class="btn btn-light mr-3">Cancel</button> --}}
                                <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <form class="forms-sample" action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <h6 class="card-title">Ganti Password</h6>
                            <div class="form-group">
                                <label for="old_password">Password Lama</label>
                                <input name="old_password" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password Baru</label>
                                <input name="password_confirmation" type="password" class="form-control">
                            </div>
                            <a href="" class="text-primary">Lupa Password?</a>
                            <div class="d-flex align-items-center justify-content-end">
                                {{-- <button class="btn btn-light mr-3">Cancel</button> --}}
                                <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                            </div>
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
