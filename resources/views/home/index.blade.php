<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Asri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('frontend')}}/img/favicon-final.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset ('frontend')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{session('success')}}
                    </div>
                    @endif
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">Beranda</a></li>
                                        <li><a href="#about_area">Tentang Kami</a></li>
                                        <li><a href="#features_room">Kamar</a></li>
                                        <li><a href="#contact_area">Kontak</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{asset ('frontend')}}/img/logo-final.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a class="" href="{{url('booking/cek-kamar')}}">Booking Kamar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hotel Asri</h3>
                                <p>Unlock to enjoy the view of Banyuwangi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Banyuwangi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hotel Asri</h3>
                                <p>Unlock to enjoy the view of Banyuwangi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Banyuwangi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area" id="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Tentang Kami</span>
                            <h3>Hotel Mewah <br>
                                Pemandangan Indah</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="{{asset('frontend')}}/img/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{asset('frontend')}}/img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="{{asset('frontend')}}/img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{asset('frontend')}}/img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Makanan Lezat</span>
                            <h3>Kami Menyajikan Makanan Segar <br>
                               Dan Lezat</h3>
                        </div>
                        <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                            dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                            sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room" id="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Kamar Pilihan</span>
                        <h3>Pilih Kamar Yang Terbaik</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{asset('frontend')}}/img/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Mulai Rp.350K/malam</span>
                            <h3>VIP Room</h3>
                        </div>
                        <a href="{{url('booking/cek-kamar')}}" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{asset('frontend')}}/img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Mulai RP.250K/malam</span>
                            <h3>Superior Room</h3>
                        </div>
                        <a href="{{url('booking/cek-kamar')}}" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{asset('frontend')}}/img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Mulai Rp.500K/malam</span>
                            <h3>Family Room</h3>
                        </div>
                        <a href="{{url('booking/cek-kamar')}}" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{asset('frontend')}}/img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Mulai Rp.220K/malam</span>
                            <h3>Yunior Room</h3>
                        </div>
                        <a href="{{url('booking/cek-kamar')}}" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

    <!-- Contact Area -->
    <section class="contact-section">
        <div class="container">
    <div class="row">
        <div class="col-12"  id="contact_area">
            <h2 class="contact-title">Hubungi Kami</h2>
        </div>
        <div class="col-lg-8">
            <form enctype="multipart/form-data" class="form-contact contact_form" action="{{url('kontak')}}" method="post" id="contactForm" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="pesan" required id="message" cols="30" rows="9"  placeholder=" Masukan Pesan "></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="nama" required id="name" type="text"  placeholder="Masukin Nama ">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" required id="email" type="email"  placeholder="Masukin Email ">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subjek" required id="subject" type="text" placeholder="Masukin Subjek">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Hotel Asri</h3>
                    <p>Jl Hasanudin No 78, Genteng, Banyuwangi</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+62 (0333) 845905</h3>
                    <p>Senin - Jumat <br> 08:00 - 16:00 WIB</p>
    
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>pelanggan@hotelasri.com</h3>
                    <p>Kirim Pertanyaan Anda Kapan Saja!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact Area End -->
    
    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="{{asset('frontend')}}/img/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('frontend')}}/img/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('frontend')}}/img/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('frontend')}}/img/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('frontend')}}/img/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                alamat
                            </h3>
                            <p class="footer_text"> Jl. Hasanudin Timur No.78 Genteng, Banyuwangi</p>
                            <a href="https://goo.gl/maps/h2u6FrgKwcpUWFuJA" class="line-button">Lihat di Map</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                reservasi
                            </h3>
                            <p class="footer_text">+62 (0333) 845905 <br>
                                reservation@hotelasri.com</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                navigasi
                            </h3>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#about_area">Tentang Kami</a></li>
                                <li><a href="#features_room">Kamar</a></li>
                                <li><a href="#contact_area">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS here -->
    <script src="{{asset ('frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset ('frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset ('frontend')}}/js/popper.min.js"></script>
    <script src="{{asset ('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset ('frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset ('frontend')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{asset ('frontend')}}/js/ajax-form.js"></script>
    <script src="{{asset ('frontend')}}/js/waypoints.min.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset ('frontend')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset ('frontend')}}/js/scrollIt.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset ('frontend')}}/js/wow.min.js"></script>
    <script src="{{asset ('frontend')}}/js/nice-select.min.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.slicknav.min.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset ('frontend')}}/js/plugins.js"></script>
    <script src="{{asset ('frontend')}}/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="{{asset ('frontend')}}/js/contact.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.form.js"></script>
    <script src="{{asset ('frontend')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset ('frontend')}}/js/mail-script.js"></script>

    <script src="{{asset ('frontend')}}/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/63063ab537898912e964e8af/1gb85alr3';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>