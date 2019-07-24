<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>simKP</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{!! asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('template/vendors/font-awesome/css/font-awesome.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('template/vendors/flag-icon-css/css/flag-icon.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('template/vendors/selectFX/css/cs-skin-elastic.css')!!}">

    <link rel="stylesheet" href="{!!secure_asset('template/assets/css/style.css')!!}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <div class="login-logo">
                        <img class="align-content" src="images/logo.png" alt="simKP">
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="NRP">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Silahkan  <a href="{{url('daftar')}}"> register</a> jika belum punya akun</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{!!secure_asset('template/vendors/jquery/dist/jquery.min.js')!!}"></script>
    <script src="{!!secure_asset('template/vendors/popper.js/dist/umd/popper.min.js')!!}"></script>
    <script src="{!!secure_asset('template/vendors/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
    <script src="{!!secure_asset('template/assets/js/main.js')!!}"></script>


</body>

</html>
