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
                    <a href="{{ route('gallery.video.add') }}" class="btn btn-primary btn-md" title="Tambah Berita">
                        <i class="mr-1" data-feather="plus-circle" style="width: 20px; height:20px;"></i>
                        Tambah Video
                    </a>
                </div>
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
                <div class="table-responsive pt-1">
                    <table class="table table-bordered table-striped table-hover" width="500px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Video</th>
                                <th>Tanggal Posting</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($videos as $item)
                                <tr>
                                    <td class="text-wrap text-capitalize">{{ ($videos->currentPage() - 1) * $videos->perPage() + $loop->iteration }}</td>
                                    <td>
                                        {!! $item->video !!}
                                    </td>
                                    <td>{{ date_format($item->created_at, "d M Y") }}</td>
                                    <td>
                                        <a class="btn btn-success btn-icon btn-edit mr-2" href="{{ route('gallery.video.edit', $item->id) }}"><i data-feather="edit"></i></a>
                                        <a class="btn btn-danger btn-hapus btn-icon" data-toggle="modal" data-target="#hapusdata" data-id="{{ $item->id }}"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="4">Belum ada data Video.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3">
                       {{ $videos->links() }}
                    </div>
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
                Apakah Anda yakin ingin menghapus data video ini?
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
            $('.form-delete').attr('action', '{{ url('admin') }}/video-delete/'+id);
        });
    </script>
@endsection
