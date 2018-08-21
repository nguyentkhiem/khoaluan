<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediaPortal Admin - Register</title>
    <meta name="description" content="MediaPortal Admin - Register">
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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style type="text/css">
        #sao{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ asset('register') }}">
                        <h4>Đăng Ký</h4>
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" enctype="multipart/form-data" role="form">
                        @if(Session::has('error'))
                                <p class="alert alert-danger">{{Session::get('error')}}</p>
                        @endif
                         {{--  @foreach($errors->all() as $error)
                                    <p class="alert alert-danger">{{$error}}</p>
                            @endforeach --}}
                        @include('flash::message')

                        <div class="form-group">
                            <label>Tên tài khoản</label><span id="sao"> (*)</span>
                            <input @if($errors->get('name')) style="border-color: red;" @endif type="text" name="name" class="form-control" placeholder="Tên tài khoản">
                            <span style="color: red;"> @foreach($errors->get('name') as $name) {{$name}} @endforeach </span>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ Email</label><span id="sao"> (*)</span>
                            <input @if($errors->get('email')) style="border-color: red;" @endif type="email" name="email" class="form-control" placeholder="Email">
                            <span style="color: red;"> @foreach($errors->get('email') as $name) {{$name}} @endforeach </span>
                        </div>
                        <div class="form-group">
                            <label>Password</label><span id="sao"> (*)</span>
                            <input @if($errors->get('password1')) style="border-color: red;" @endif type="password" name="password1" class="form-control" placeholder="Password">
                            <span style="color: red;"> @foreach($errors->get('password1') as $name) {{$name}} @endforeach </span>
                        </div>
                        <div class="form-group">
                            <label>Nhập lại Password</label><span id="sao"> (*)</span>
                            <input @if($errors->get('password2')) style="border-color: red;" @endif type="password" name="password2" class="form-control" placeholder="Nhập lại Password">
                            <span style="color: red;"> @foreach($errors->get('password2') as $name) {{$name}} @endforeach </span>
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện</label><br>                  
                            <input @if($errors->get('img')) style="border-color: red;" @endif type="file" name="img" src="img/home/12.jpg">
                            <span style="color: red;"> @foreach($errors->get('img') as $name) {{$name}} @endforeach </span>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox"> Đồng ý với những chính sách của chúng tôi<span id="sao"> (*)</span>
                            </label><br>
                            <span style="color: red;"> @foreach($errors->get('checkbox') as $name) {{$name}} @endforeach </span>
                        </div>
                        <button style="font-weight: bold;" type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đăng Ký</button>
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
