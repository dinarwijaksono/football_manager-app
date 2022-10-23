<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Football manager</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a><b>Football</b> Manager</a>
        </div><!-- /.login-logo -->

        <div class="login-box-body">
            <h3 class="login-box-msg"><b>LOGIN</b></h3>

            @if (session('loginFailed'))
            <p style="color: red;"><i>{{ session('loginFailed') }}</i></p>
            @endif

            <form action="/Auth/login" method="post">
                @csrf

                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @error('username')
                    <p style="color: red;">{{$message}}</p>
                    @endError
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @error('password')
                    <p style="color: red;">{{$message}}</p>
                    @endError
                </div>

                <div class="row">
                    <div class="col-xs-8">

                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class="text-center" style="padding-top: 20px;">
                <a href="#">Lupa password</a><br>
                <a href="/Auth/register" class="text-center">Saya belum punya akun</a>
            </div>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>