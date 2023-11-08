<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Login | AdminLTE3 By Admin</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Login" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/login/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/login/css/font-awesome.css') }}"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- js -->
    <script type="text/javascript" src="{{ asset('AdminLTE/login/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->

    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->


    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <script src="{{ asset('AdminLTE/login/js/jquery.vide.min.js') }}"></script>
    <!-- main -->
    <div
        style="background-image: url('https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D'); background-size: 100% 100%;">
        <div class="center-container">
            <!--header-->
            <div class="header-w3l">
                <h1>Login AdminLTE3</h1>
            </div>
            <!--//header-->
            <div class="main-content-agile">
                <div class="sub-main-w3">
                    <div class="wthree-pro">
                        <h2>Đăng Nhập Tại Đây</h2>
                    </div>
                    <form action="{{ route('admin.Checklogin') }}" method="post">
                        @csrf
                        <input placeholder="Username or E-mail" name="Name" class="user" type="email"
                            required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
                        <input placeholder="Password" name="Password" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
                        <div class="sub-w3l">
                            <h6><a href="#">Forgot Password?</a></h6>
                            <div class="right-w3l">
                                <input type="submit" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--//main-->

            <!--footer-->
            <div class="footer">
            </div>
            <!--//footer-->
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- /.toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "5000",
            "timeOut": "10000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        // toastr.success("Are you the six fingered man?");
    </script>
    @if (session()->has('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @elseif (session()->has('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

</body>

</html>
