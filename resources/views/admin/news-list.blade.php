@extends('layouts.admin-dashboard')
@section('title')
    List Berita
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">List Berita</h4>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <a href="" class="btn btn-primary btn-md" title="Tambah Berita">
                            <i class="mr-1" data-feather="plus-circle" style="width: 20px; height:20px;"></i>
                            Tambah Berita
                        </a>
                    </div>
                    <div class="col-md-10">
                        <form action="{{ url()->current() }}" method="GET">
                            <div class="input-group ml-1 mb-3 row justify-content right">
                                <select name="category" id="category">
                                    <option value="">Select a Category</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Publisher" id="publisher" name="publisher" value="{{ isset($_GET['publisher']) ? $_GET['publisher'] : '' }}">
                                <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ isset($_GET['title']) ? $_GET['title'] : '' }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit" value="search" title="Search">Search</button>
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
                                {{-- <th>Header Image</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Publisher</th>
                                <th>Date Post</th>
                                <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($news_content as $no => $news_contents )
                            <tr>
                                <td>
                                    <div class="card">
                                        <div class="card-body" style="width: 250px; height: 200px; background-image: url('{{ asset('uploads/'.@$news_contents->header_img) }}'); background-size: cover; ">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-wrap text-capitalize">
                                    @if ($news_contents['category'] == 'mining')
                                    <p>Berita Tambang</p>
                                    @elseif ($news_contents['category'] == 'daily_news')
                                    <p>Berita Harian</p>
                                    @elseif ($news_contents['category'] == 'committee')
                                    <p>Aktivitas - Komite</p>
                                    @elseif ($news_contents['category'] == 'member')
                                    <p>Aktivitas - Member</p>
                                    @endif
                                </td>
                                <td class="text-wrap text-capitalize">{{ $news_contents['title'] }}</td>
                                <td>{{ $news_contents['publisher'] }}</td>
                                <td>{{ date_format($news_contents->created_at, "d M Y") }}</td>
                                <td>
                                    <a class="btn btn-success btn-icon btn-edit mr-2" href="{{ route('news.edit', $news_contents->id, ['id']) }}"><i data-feather="edit"></i></a>

                                    <a class="btn btn-danger btn-hapus btn-icon" data-toggle="modal" data-target="#hapusdata" data-id="{{ $news_contents->id }}"><i data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @endforeach --}}
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
