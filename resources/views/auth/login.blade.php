<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="/admin-theme/img/favicon.png"/>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/admin-theme/vendor/fontawesome/css/font-awesome.min.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/admin-theme/vendor/simple-line-icons/css/simple-line-icons.css">

    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/admin-theme/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/admin-theme/css/app.css" id="maincss">
    <link rel="stylesheet" href="/admin-theme/css/auth.css" id="maincss">
</head>

<body>
<div class="wrapper">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <div class="block-center mt-xl">
                <div class="col-lg-12">
                    <!-- Flash Message -->
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-dark panel-flat">
                    <div class="panel-heading text-center">
                        <a href="#">
                            <img src="/admin-theme/img/favicon.png" alt="Image"
                                 class="block-center img-rounded" style="width: 5%">
                        </a>
                    </div>
                    <div class="panel-body">
                        <p class="text-center pv">SIGN IN TO CONTINUE</p>
                        <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" method="POST" action="/login">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <input id="exampleInputEmail1" type="email" placeholder="Enter email" autocomplete="off"
                                       required class="form-control" name="email">
                                <span class="fa fa-envelope form-control-feedback text-muted"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="exampleInputPassword1" type="password" name="password" placeholder="Password"
                                       required class="form-control">
                                <span class="fa fa-lock form-control-feedback text-muted"></span>
                            </div>
                            <div class="clearfix">
                                <div class="checkbox c-checkbox pull-left mt0">
                                    <label>
                                        <input type="checkbox" value="" name="remember">
                                        <span class="fa fa-check"></span>Remember Me
                                    </label>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="text-muted">Forgot your password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-lg">Login</button>
                        </form>
                        <p class="pt-lg text-center">Need to Signup?</p>
                        <a href="#" class="btn btn-block btn-default">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="/admin-theme/vendor/modernizr/modernizr.custom.js"></script>
    <!-- JQUERY-->
    <script src="/admin-theme/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="/admin-theme/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="/admin-theme/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
    <!-- PARSLEY-->
    <script src="/admin-theme/vendor/parsleyjs/dist/parsley.min.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/admin-theme/js/app.js"></script>
</body>

</html>