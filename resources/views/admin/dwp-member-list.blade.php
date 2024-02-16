@extends('layouts.admin-dashboard')
@section('title')
    List Anggota DWP
@endsection

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">List Anggota DWP</h4>
                    <br>
                    <div class="row">
                        {{-- <div class="col-md-3">
                        <a href="{{ route('member.choose-category') }}" class="btn btn-primary btn-md" title="Tambah Berita">

                        </a>
                    </div> --}}
                        <div class="col-md-6">
                            <form action="{{ url()->current() }}" method="GET">
                                <div class="input-group ml-1 mb-3 row justify-content right">
                                    {{-- <input type="text" class="form-control" placeholder="" id="code" name="code"> --}}
                                    <input type="text" class="form-control" placeholder="Cari Anggota" id="name"
                                        name="name">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit" value="search"
                                            title="Search">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @if ($message = Session::get('success'))
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
        @endif --}}
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive pt-1">
                        <table class="table table-bordered table-striped table-hover" width="500px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Anggota</th>
                                    <th>Email</th>
                                    <th>Tanggal Registrasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse ($members as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td class="text-warning"><b>{{ $item->email }}</b></td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y (h:i:s A)') }}</td>
                                            <td>
                                                <a class="btn btn-warning btn-icon mr-2" href="{{ route('dwp-member.detail', $item->id) }}"><i data-feather="eye"></i></a>
                                                {{-- <a class="btn btn-success btn-icon btn-edit mr-2"
                                                    href=""><i data-feather="edit"></i></a>
                                                <a class="btn btn-danger btn-hapus btn-icon" data-toggle="modal"
                                                    data-target="#hapusdata" data-id="{{ $item->id }}">
                                                    <i data-feather="trash"></i></a> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum ada data anggota.</td>
                                        </tr>
                                    @endforelse
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{-- <ul class="pagination">
                        @if ($members->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.first')">
                            <span class="page-link" aria-hidden="true">First</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ route('member.list') }}" rel="prev" aria-label="@lang('pagination.first')">First</a>
                        </li>
                        @endif

                        {{ $members->links() }}

                        @if ($members->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ route('member.list').'?page='.$members->lastPage() }}" rel="last" aria-label="@lang('pagination.last')">Last</a>
                        </li>
                        @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.last')">
                            <span class="page-link" aria-hidden="true">Last</span>
                        </li>
                        @endif
                    </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
