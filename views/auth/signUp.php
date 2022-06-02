<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from curvestudio.ir/adminox/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 13:51:29 GMT -->
<head>
    <meta charset="utf-8"/>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <?php require $base . $dirSep . "components" . $dirSep . "toastCss.php" ?>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet"/>
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- toaster -->

    <link href="assets/css/app-rtl.css" rel="stylesheet" type="text/css" id="app-stylesheet"/>

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">


<div class="account-pages w-100 mt-5 mb-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mb-0">

                    <div class="card-body p-4">

                        <div class="account-box">
                            <div class="account-logo-box">
                                <div class="text-center">
                                    <a href="index.html">
                                        <img src="assets/images/logo-dark.png" alt="" height="30">
                                    </a>
                                </div>
                                <h5 class="text-uppercase mb-1 mt-4">ثبت نام</h5>
                                <p class="mb-0">جهت دسترسی به پنل مدیریت</p>
                            </div>

                            <div class="account-content mt-4">
                                <form class="form-horizontal" action="" method="post">

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="name">نام کامل</label>
                                            <input class="form-control" type="text" id="name" required=""
                                                   placeholder="نام شما" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="email">ایمیل</label>
                                            <input class="form-control" name="user_email" type="email" id="email"
                                                   required=""
                                                   placeholder="ایمیل">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="password">رمز عبور</label>
                                            <input class="form-control" name="password" type="password" required=""
                                                   id="password"
                                                   placeholder="رمز عبور خود را وارد کنید">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-12">

                                            <div class="checkbox checkbox-success">
                                                <input id="remember" type="checkbox" name="isAspect" value="true">
                                                <label for="remember">
                                                    من میپذیرم تمامی <a href="#"> قوانین و مقررات سایت را </a>
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row text-center mt-2">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light ffiy"
                                                    type="submit">ثبت نام رایگان
                                            </button>
                                        </div>
                                    </div>

                                </form>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                            <button type="button"
                                                    class="btn mr-1 btn-facebook waves-effect waves-light">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>
                                            <button type="button"
                                                    class="btn mr-1 btn-googleplus waves-effect waves-light">
                                                <i class="fab fa-google"></i>
                                            </button>
                                            <button type="button" class="btn mr-1 btn-twitter waves-effect waves-light">
                                                <i class="fab fa-twitter"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4 pt-2">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted">آیا قبلا ثبت نام کرده اید <a href="page-login.html"
                                                                                           class="text-dark ml-1"><b>ورود</b></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<!-- toast js -->
<?php require $base . $dirSep . "components" . $dirSep . "toastsJs.php" ?>
</body>


<!-- Mirrored from curvestudio.ir/adminox/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 13:51:29 GMT -->
</html>