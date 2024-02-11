@extends('layouts.admin-dashboard')
@section('title')
    List Berita
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4>List Berita</h4>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <a href="{{ route('news.add') }}" class="btn btn-primary btn-md" title="Tambah Berita">
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
                                {{-- <input type="text" class="form-control" placeholder="Publisher" id="publisher" name="publisher" value="{{ isset($_GET['publisher']) ? $_GET['publisher'] : '' }}"> --}}
                                {{-- <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ isset($_GET['title']) ? $_GET['title'] : '' }}"> --}}
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit" value="search" title="Search">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                <th>Gambar Thumbnail</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tanggal Posting</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                                <tr>
                                    <td>
                                        <div class="card">
                                            <div class="card-body" style="width: 250px; height: 200px; background-image: url('{{ asset('uploads/'.@$item->image_thumbnail) }}'); background-size: cover; ">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-wrap text-capitalize">{{ $item->title }}</td>
                                    <td class="text-wrap text-capitalize">{{ $item->category }}</td>
                                    <td class="text-wrap text-capitalize">{{ $item->author }}</td>
                                    <td>{{ date_format($item->created_at, "d M Y") }}</td>
                                    <td>
                                        <a class="btn btn-success btn-icon btn-edit mr-2" href="{{ route('news.edit', $item->id) }}"><i data-feather="edit"></i></a>
                                        <a class="btn btn-danger btn-hapus btn-icon" data-toggle="modal" data-target="#hapusdata" data-id="{{ $item->id }}"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <ul class="pagination">
                            {{-- @if ($news_content->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.first')">
                                <span class="page-link" aria-hidden="true">First</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ route('news.list') }}" rel="prev" aria-label="@lang('pagination.first')">First</a>
                            </li>
                            @endif --}}

                            {{-- {{ $news_content->links() }} --}}

                            {{-- @if ($news_content->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ route('news.list').'?page='.$news_content->lastPage() }}" rel="last" aria-label="@lang('pagination.last')">Last</a>
                            </li>
                            @else
                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.last')">
                                <span class="page-link" aria-hidden="true">Last</span>
                            </li>
                            @endif --}}
                        </ul>
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
                Apakah Anda yakin ingin menghapus data berita ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
            $('.form-delete').attr('action', '{{ url('admin') }}/news/delete/'+id);
        });
    </script>
@endsection
