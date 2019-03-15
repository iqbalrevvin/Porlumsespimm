<!--SCRIPT FRONTEND LOGIN-->
<?php
@session_start();
if(@$_SESSION['Administrator'] | @$_SESSION['Alumni']) {
    echo "<script>window.location='./';</script>";
}else{
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Sespimma | Portal Alumni</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Portal Alumni Sespimma" name="description" />
        <meta content="Sespimma Web Alumni" name="@iqbalrevvin Development" />
        <meta http-equiv="X-UA-Compatible"  content="IE=edge" />
        <meta property="og:url"             content="" />
        <meta property="og:type"            content="website"/>
        <meta property="og:title"           content="Sespimma Portal Alumni" />
        <meta property="og:description"     content="Sistem POrtal Alumni Sespimma" />
        <meta http-equiv="Content-Type"     content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible"  content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="theme-color" content="#B8860B">
        <meta content='id' name='language'/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="Assets/images/sespimma.ico">
                <!-- App css -->
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Toastr css -->
        <link href="Assets/vendors/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />
        

    </head>
<body class="account-pages">
    <!-- Begin page -->
    <div class="accountbg" style="background: url('Assets/images/login-bg.jpeg');background-size: cover;background-position: left;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box p-5">
                        <h2 class="text-uppercase text-center pb-4">
                            <a href="./" class="text-success">
                                <span><img src="Assets/images/sespimma-logo-wide.png" alt="" height="75" width="auto"></span>
                            </a>
                        </h2>
                        <div id="resultLogin"></div>
                        <form class="" id="formAuthLogin">
                            <div class="form-group m-b-20 row">
                                <div class="col-12">
                                    <label for="emailaddress">Nama Pengguna</label>
                                    <input class="form-control" type="text" placeholder="Masukan Nama Pengguna" name="username" id="username" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-group row m-b-20">
                                <div class="col-12">
                                    <a href="#" data-toggle="modal" data-target="#lupaKataSandi-modal" class="text-muted float-right">
                                        <small>Lupa Kata Sandi?</small>
                                    </a>
                                    <label for="password">Kata Sandi</label>
                                    <input class="form-control" type="password" placeholder="Masukan Kata Sandi" name="password" id="password" required>
                                </div>
                            </div>


                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button type="button" class="btn btn-block btn-dark waves-effect waves-light" id="submitAuthLogin">Masuk</button>
                                    <div id="loadLogin"></div>
                                </div>
                            </div>

                        </form>

                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Tidak Punya Akun? 
                                    <a href="#" data-toggle="modal" data-target="#caraDaftar-modal" class="text-dark m-l-5"><b>Cara Daftar!</b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require('View/Auth/modal_lupaKataSandi.php'); ?>
    <?php require('View/Auth/modal_caraDaftar.php'); ?>
    <!-- jQuery  -->
    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/vendors/jquery-toastr/jquery.toast.min.js" type="text/javascript"></script>
    <script src="JSController/Auth/login.js" type="text/javascript"></script>


</body>

</html>
<?php } ?>