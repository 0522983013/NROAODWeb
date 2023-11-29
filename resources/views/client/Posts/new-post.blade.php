@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Post</li>
        </ol>
    </nav>
    <section class="container">
        <!-- Item -->
        <article>
            <form onsubmit="return CheckCreate()" name="create" action="{{ route('client.Posts.store') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title">Tiêu Đề:</label>
                    <input type="text" minlength="10" class="form-control" name="title" placeholder="Nhập Tiêu Đề Bài Viết">
                </div>
                <div class="form-group">
                    <label for="body">Nội Dung</label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                </div>
                <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">Gửi</button>
                </div>
            </form>
        </article>
    </section>
    <script>
        function CheckCreate() {
            var u = document.create.name.value;
            var p = document.create.body.value;
            if (u == "" || p == "") {
                toastr.warning('Dữ Liệu Không Được Bỏ Trống');
                return false;
            }
            return true;
        }
    </script>
    <br>
@endsection
