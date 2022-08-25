<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets')}}/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset ('assets')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset ('assets')}}/css/style.css" rel="stylesheet" />
    <link href="{{asset ('assets')}}/css/dark-style.css" rel="stylesheet" />
    <link href="{{asset ('assets')}}/css/transparent-style.css" rel="stylesheet">
    <link href="{{asset ('assets')}}/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset ('assets')}}/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset ('assets')}}/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{asset ('assets')}}/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- End GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <img src="../assets/images/brand/logo-white-update.png" class="header-brand-img m-0" alt="">
                    </div>
                </div>

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <span class="login100-form-title pb-5">
                            Terima Kasih Sudah Mendaftar
                        </span>
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <p class="text-muted">Silahkan Cek Email Kamu Untuk Verifikasi !</p>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="pt-3">
                                <p class="text-dark mb-0">Tidak Ada Email Masuk ? <button type="submit" class="btn btn-primary"> Klik Disini</button></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{asset ('assets')}}/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset ('assets')}}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset ('assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset ('assets')}}/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset ('assets')}}/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset ('assets')}}/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset ('assets')}}/js/custom.js"></script>

</body>

</html>