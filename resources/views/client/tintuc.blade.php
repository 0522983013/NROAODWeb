@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
        </ol>
    </nav>
    <section style="background-color: #FFAF4D;" class="container card">
        <!-- Item -->
        <article class="d-flex">
            <div class="mt-5 ps-0 d-flex justify-content-between" style="width: 130px;">
                <div class="text-center"><img src="{{ asset('client/gif/logo-light.gif') }}" class="rounded-circle"
                        width="60" alt="Image"></div>
                <i class='mt-3 bx bxs-left-arrow'></i>
            </div>

            <div class="ms-2 mt-3 mb-5 me-3 border bg-white card text-dark">
                <div class="card-head">
                    <p class="ms-4 mt-4 h4">
                        <a href="#" class="text-primary">WORLD CUP 2022</a>
                    </p>
                    <hr>
                </div>
                <div class="card-body">
                    <p>Chào các cư dân
                        <br>Admin sẽ tiến hành bảo trì để update nội dung sau:
                        <br><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png" alt="⚽️"><img
                            src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png" alt="⚽️"><img
                            src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png" alt="⚽️">
                        WORLD CUP 2022 <img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png"
                            alt="⚽️"><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png"
                            alt="⚽️"><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t30/2/16/26bd.png"
                            alt="⚽️">
                        <br>Thời gian: 10h00 16/11 đến 23h59 18/12/2022
                        <br>Kết thúc đua top lúc 0h 19/12
                        <br>Phần quà đua top sẽ được trao từ 19/12 đến 25/12
                        <br><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t9d/2/16/1f44f.png"
                            alt="👏"><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t9d/2/16/1f44f.png"
                            alt="👏"><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t9d/2/16/1f44f.png"
                            alt="👏">-
                        Mừng môn thể thao Vua, Ngọc Rồng Online sẽ update sự
                        kiện để ăn mừng môn thể thao này.
                        <br>- Các cư dân cần phải hoàn thành các nhiệm để thu thập các mảnh chữ (10 mảnh)
                        để ghép thành dòng chữ WORLD CUP 2022
                        <br>1/ Đăng nhập mỗi ngày sẽ nhận - mảnh W, tối đa 1 mảnh/ ngày
                        <br>2/ Đánh quái có thể nhặt được - mảnh W và mảnh O, tối đa 99 mảnh/ ngày
                        <br>3/ Doanh trại độc nhãn nhặt được - mảnh R, tối đa 99 mảnh/ ngày
                        <br>4/ Khí Gas nhặt được - mảnh L, tối đa 10 mảnh/ ngày
                        <br>5/ Kho báu đáy biển nhặt được - mảnh D, tối đa 10 mảnh/ ngày
                        <br>6/ Con đường rắn độc nhặt được - mảnh C, tối đa 99 mảnh/ ngày
                        <br>7/ Thắng 1 trận đại hội võ thuật nhặt được - mảnh U, tối đa 99 mảnh/ ngày
                        <br>8/ Hoàn thành 1 nhiệm vụ bò mộng nhặt được - mảnh P, tối đa 10 mảnh/ ngày
                        <br>9/ Giúp đỡ Xinbato nhặt được - mảnh 20, tối đa 99 mảnh/ ngày
                        <br>10/ Săn boss bất kì đế nhặt được - mảnh 22, tối đa 10 mảnh/ ngày
                        <br>Tất cả mảnh WORLD CUP 2022 -- ký gửi vàng
                        <br>- Thu thập đủ dòng chữ WORLD CUP 2022 các cư dân sẽ mang đến Quy Lão (Bà Hạt
                        Mít) để nhận nhiệm vụ đặc biệt, sẽ có 2 loại:
                        <br>* Nhiệm vụ dễ - 1 triệu vàng
                        <br>* Nhiệm vụ khó - 10 ngọc
                        <br><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t6b/2/16/1f4dd.png" alt="📝">Khi
                        hoàn thành nhiệm vụ sẽ nhận được thẻ chứng nhận:
                        <br>* Nhiệm vụ dễ sẽ nhận được thẻ Fan bóng đá gà con, tối đa 10 thẻ/ ngày, ký
                        gửi ngọc
                        <br>* Nhiệm vụ khó sẽ nhận được thẻ Fan cuồng bóng đá, tối đa 10 thẻ/ ngày, ký
                        gửi ngọc
                        <br>Dùng 10 thẻ Fan Gà nửa mùa + 1tr vàng để đổi 1 Capsule World Cup 2022 thường,
                        mở ra sẽ random 1 trong 3 loại có hạn sử dung. Capsule World Cup 2022 thường
                        được ký gửi bằng vàng
                        <br>- Cờ logo quatar 1
                        <br>- Cờ logo quatar 2
                        <br>- Cờ giày vàng
                        <br>Dùng 10 thẻ Fan cuồng bóng đá + 500 ngọc để đổi 1 Capsule World Cup 2022 Vip,
                        mở ra sẽ random 1 trong 6 loại hạn sử dụng và vĩnh viễn. Capsule World Cup
                        2022 Vip được ký gửi bằng ngọc
                        <br>- Cờ logo quatar 1
                        <br>- Cờ logo quatar 2
                        <br>- Cờ giày vàng
                        <br>- Cờ Fifa
                        <br>- Cờ Goal
                        <br>- Cờ Quả bóng vàng
                        <br><img src="https://static.xx.fbcdn.net/images/emoji.php/v9/t23/2/16/1f381.png" alt="🎁">Đua
                        top mở Capsule World Cup 2022 Vip:
                        <br>Top 1: Thú cưỡi Quả bóng lửa vĩnh viễn, mảnh nhẫn thiên sứ x200
                        <br>Top 2: Thú cưỡi Quả bóng lửa vĩnh viễn, mảnh nhẫn thiên sứ x100
                        <br>Top 3: Thú cưỡi Quả bóng lửa vĩnh viễn, mảnh nhẫn thiên sứ x50
                        <br>Top 4 - 50: Thú cưỡi Quả bóng lửa vĩnh viễn
                        <br>Top 51 - 100: Thú cưỡi Quả bóng lửa 60 ngày
                        <br>- Cửa hàng Santa cập nhật nhiều món hàng mới.
                        <br>- Tăng thêm giới hạn hành trang và rương 5 ô, mua tại Santa
                        <br>Chúc các cư dân vui vẻ.
                    </p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="badge fs-sm text-white bg-info shadow-info text-decoration-none m-1">Chú Bé
                            Rồng</a>
                        <p> </p>
                        <a href="#"
                            class="badge fs-sm text-white bg-success shadow-success text-decoration-none m-1">Khuyến
                            Mãi</a>
                    </div>

                </div>
            </div>

        </article>
    </section>
    <br>
@endsection
