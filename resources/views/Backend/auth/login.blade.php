<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="backend-style/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend-style/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend-style/css/animate.css" rel="stylesheet">
    <link href="backend-style/css/style.css" rel="stylesheet">
    <link href="backend-style/css/custom.css" rel="stylesheet">
    {{-- <script src="vendor/flasher/flash.min.js"></script> --}}


</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to DEVELOPER+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form method="post" class="m-t" role="form" action="{{ route('auth.login') }}">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                            @if($errors->has('email'))
                                <span class="error-message">* {{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Mật Khẩu">
                            @if($errors->has('password'))
                                <span class="error-message">* {{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng Nhập</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <!-- <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap &copy; 2025</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2024-2025</small>
            </div>
        </div>
    </div>

</body>

</html>
