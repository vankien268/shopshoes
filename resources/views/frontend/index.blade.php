<!-- trang này là trang gồm header và footer -->
<!doctype html>
<html class="no-js" lang="">
     
<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:37:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Home || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- All css -->

        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('Shoes/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('Shoes/css/owl.transitions.css') }}">
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/jquery-ui.css') }}">
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/meanmenu.min.css') }}">
        <!-- nivoslider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/lib/css/nivo-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('Shoes/lib/css/preview.css') }}">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/animate.css') }}">
        <!-- magic CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/magic.css') }}">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/normalize.css') }}">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/main.css') }}">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/style.css') }}">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/responsive.css') }}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- header area start -->
       <!-- thuc hien load file blade = php -->
       @include('frontend.header.header')
       <!-- hoawcj la dung kieu php -->
      {{-- <?php include('frontend.header.header') ?> --}}
        <!-- header area end -->
        <!-- slider area start -->
        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <img src="{{ asset('Shoes/img/slider/slider-1.jpg') }}" alt="" title="#slider-direction-1"  />
                    <img src="{{ asset('Shoes/img/slider/slider-2.jpg') }}" alt="" title="#slider-direction-2"  />
                </div>
                 {{  @auth::guard('admin')->user()->name }}
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >nike Ari max 2015</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >GET UP TO 50% SALE</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        <!-- banner area start -->
       @include('frontend.banner.banner')
        <!-- banner area end -->
        <!-- products area start -->
       <!-- san pham trang chu -->
         @yield('content')

     @include('frontend.footer.footer')

        <!-- jquery
        ============================================ -->
        <script src="{{ asset('Shoes/js/vendor/jquery-1.12.1.min.js') }}"></script>
        <!-- bootstrap JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/wow.min.js') }}"></script>
        <!-- price-slider JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/jquery-price-slider.js') }}"></script>
        <!-- nivoslider JS
        ============================================ -->
        <script src="{{ asset('Shoes/lib/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('Shoes/lib/home.js') }}"></script>
        <!-- meanmenu JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/owl.carousel.min.js') }}"></script>
        <!-- elevatezoom JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/jquery.elevatezoom.js') }}"></script>
        <!-- scrollUp JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/jquery.scrollUp.min.js') }}"></script>
        <!-- plugins JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/plugins.js') }}"></script>
        <!-- main JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/main.js') }}"></script>
    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:38:50 GMT -->
</html>
