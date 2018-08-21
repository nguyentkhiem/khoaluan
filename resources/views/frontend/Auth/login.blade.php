<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediaPortal - Login</title>
    <meta name="description" content="MediaPortal - Login">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('assets')}}/">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/k.png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/bootstrap-select.less">
    <link rel="stylesheet" href="scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style type="text/css">
        #login{
            width:50%; float: left; color: blue; font-weight: bold;
        }
        #login:hover{
            color: white;
        }
        #register{
            width:50%; color: green;font-weight: bold;
        }
        #register:hover{
            color: white;
         }
    </style>
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <h4>Đăng nhập</h4>
                    </a>
                </div>
                <div class="login-form">
                    @include('errors.error')
                    @include('flash::message')
                    <form role="form" method="post" {{-- action="{{ route('login') }}" --}}>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Ghi nhớ
                            </label>
                            <label class="pull-right">
                                <a href="#">Quên mật khẩu?</a>
                            </label>

                        </div>
                        <a id="login" type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-star"></i> Đăng nhập</a>
                        <a href="{{ asset('register') }}" id="register" type="submit" name="register" class="btn btn-outline-success"><i class="fa fa-magic"></i> Đăng Ký</a>
                        
                        
                        {{csrf_field()}}
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="js/vendor/jquery-2.1.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


</body>
</html>
