@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create_Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (session('success'))
            <div class="alert-success">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Slug</th>
                                    <th>Imgage</th>
                                    <th>Mô tả</th>
                                    <th>Ngày Tạo</th>
                                    <th>custom</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_category as $item)
                                    <form action="{{ route('admin.category.destroy', $item->id) }}" method="post">
                                        @method('DELETE')
                                        <tr>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="text" name="id" value="{{ $item->id }}" hidden>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>
                                            @if (isset($item->image))
                                                <td><img style="width: 100px; height: 100px;" src="{{ asset('storage/'.$item->image) }}"
                                                        alt="{{ $item->slug }}"></td>
                                            @else
                                                <td></td>
                                            @endif
                                            <td>{{ $item->describe }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ route('admin.category.edit', $item->id) }}">Sửa</a>
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                                <center>{{ $data_category->links() }}</center>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
