<!-- trang này gọi là trang trong để tất cả trang vd: chi tiêt, tin tức, giơi thiêu,  -->
<!-- gồm 3 thành phần: header, footer, và trang này sẽ đc content-left + content-right của các trang khác nó kế thừa vào trang trong này -->
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/james-preview/james/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:39:04 GMT -->
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact || James </title>
  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/sweetalert2.css') }}">
        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('Shoes/css/font-awesome.min.css') }}">
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
        <link rel="stylesheet" href="{{ asset('Shoes/css/responsive.css') }}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset('Shoes/js/vendor/modernizr-2.8.3.min.js') }}"></script>
@stack('css')
<!-- stack phải đặt vào trang bố, trang để các file khác nó extends vào. Dùng để các file kế thừa vào file này thì các css -->
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- header area start -->
       @include('frontend.header.header')
        <!-- header area end -->
        <!-- contact area start -->
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> contact</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Category</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Dresses (4)</a></li>
                                        <li><a href="#">shoes (6)</a></li>
                                        <li><a href="#">Handbags (1)</a></li>
                                        <li><a href="#">Clothing (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Color</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Black (2)</a></li>
                                        <li><a href="#">Blue (2)</a></li>
                                        <li><a href="#">Green (4)</a></li>
                                        <li><a href="#">Grey (2)</a></li>
                                        <li><a href="#">Red (2)</a></li>
                                        <li><a href="#">White (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Manufacturer</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Calvin Klein (2)</a></li>
                                        <li><a href="#">Diesel (2)</a></li>
                                        <li><a href="#">option value (1)</a></li>
                                        <li><a href="#">Polo (2)</a></li>
                                        <li><a href="#">store view (4)</a></li>
                                        <li><a href="#">Tommy Hilfiger (2)</a></li>
                                        <li><a href="#">will be used (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                       @yield('content')
                    </div>
                </div>
            </div>
        </div>
     

      	@include('frontend.footer.footer')
     



      <script src="{{ asset('Shoes/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(23.81033, 90.41252)
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                                              mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/contact/map-marker.png',
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <!-- main JS
        ============================================ -->
         <script src="{{ asset('Shoes/js/main.js') }}"></script>

    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:39:04 GMT -->
</html>
@stack('js')