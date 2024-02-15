@extends('layouts.admin-dashboard')
@section('title')
    List Slider
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4>List Slider</h4>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <a href="{{ route('slider.add') }}" class="btn btn-primary btn-md" title="Tambah Slider">
                            <i class="mr-1" data-feather="plus-circle" style="width: 20px; height:20px;"></i>
                            Tambah Slider
                        </a>
                    </div>
                </div>
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
                <div class="table-responsive pt-1">
                    <table class="table table-bordered table-striped table-hover" width="500px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar Slider</th>
                                <th>Judul</th>
                                <th>Deskripsi Singkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliders as $item)
                                <tr>
                                    <td class="text-wrap text-capitalize">{{ $loop->iteration }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="card" style="width: 250px; border: none;">
                                            <div class="card-body" style="width: 100%; height: 200px; background-image: url('{{ asset('uploads/'.@$item->image) }}'); background-size: cover; background-position: center;"></div>
                                        </div>
                                    </td>
                                    <td class="text-wrap text-capitalize">{{ $item->title }}</td>
                                    <td class="text-wrap text-capitalize">{{ $item->short_desc }}</td>
                                    <td>
                                        <a class="btn btn-success btn-icon btn-edit mr-2" href="{{ route('slider.edit', $item->id) }}"><i data-feather="edit"></i></a>
                                        <a class="btn btn-danger btn-hapus btn-icon" data-toggle="modal" data-target="#hapusdata" data-id="{{ $item->id }}"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Belum ada data Slider.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- <div class="mt-3">
                       {{ $sliders->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
  <div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="POST" class="form-delete">
            @csrf
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data slider ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
        $('.btn-hapus').on('click', function() {
            const id = $(this).data('id');
            $('.form-delete').attr('action', '{{ url('admin') }}/slider-delete/'+id);
        });
    </script>
@endsection
