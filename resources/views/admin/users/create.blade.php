@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create_Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item">users</li>
                            <li class="breadcrumb-item active">create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if (isset($status) && $status == 'error')
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">{{$status}}</h3>
                        </div>
                        <div class="card-body">
                            {{ $msg }}
                        </div>
                    </div>
                @endif
                <div class="card card-primary">
                    <form action="/admin/users/create" method="POST" enctype='multipart/form-data'>
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="username">UserName</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter email" aria-invalid="true">
                            </div>
                            <div class="form-group">
                                <label for="name">Họ Và Tên</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Họ Tên">
                            </div>
                            <div class="form-group">
                                <label for="diachi">Địa Chỉ</label>
                                <input type="text" class="form-control" id="diachi" name="diachi"
                                    placeholder="Địa Chỉ">
                            </div>
                            <div class="form-group">
                                <label for="group">Chức Vụ</label>

                                <select class="custom-select rounded-0" name="group" id="group">
                                    <option value="member">Thành Viên</option>
                                    <option value="admin">Quản Trị Viên</option>
                                </select>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" id="Create_user">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
