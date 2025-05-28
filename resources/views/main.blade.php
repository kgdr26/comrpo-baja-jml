<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PT MANDALA MAKMUR SENTOSA</title>
        <link rel="canonical" href="">
        <link rel="icon" type="image/png" href="img/ico.png">
        <meta name="description" content="PT MANDALA MAKMUR SENTOSA.">
        <meta name="author" content="">
        <meta name="keywords" content="PT MANDALA MAKMUR SENTOSA ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta property="og:title" content="PT MANDALA MAKMUR SENTOSA">
        <meta property="og:type" content="website" />
        <meta property="og:description" content="PT MANDALA MAKMUR SENTOSA.">
        <meta property="og:image" content="{{asset('assets/img/logo/logo2.png')}}">
        <meta property="og:url" content="">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/color-default.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/retina.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/masterslider/style/masterslider.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/masterslider/skins/default/style.css')}}"/>
        <link rel='stylesheet' href="{{asset('assets/owl-carousel/owl.carousel.css')}}"/>
        <link rel='stylesheet' href="{{asset('assets/owl-carousel/owl.theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"/>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}"/>
        
        <style>
            .pi-caption01jarak { left:750px;}
            @media only screen and (min-width: 320px) and (max-width: 479px){
                .pi-caption01jarak { left:600px;}
            }
            .link a { color:#fff;}
            .link a:hover { color:#f36f21;}
		</style>
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NYGMPGPZ4T"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
        
            gtag('config', 'G-NYGMPGPZ4T');
        </script>
    </head>
    <body>

        <!-- .header-wrapper start -->
        <div id="header-wrapper">
            @include('Template.header')
        </div>
        <!-- #header-wrapper end -->

        @yield('content')
        
        <!-- Footer Start -->
        @include('Template.footer')
        <!-- Footer End -->

        <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script><!-- jQuery library -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- .bootstrap script -->
        <script src="{{asset('assets/js/jquery.scripts.min.js')}}"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="{{asset('assets/masterslider/masterslider.min.js')}}"></script><!-- Master slider main js -->
        <script src="{{asset('assets/masterslider/jquery.easing.min.js')}}"></script><!-- Master slider easing js -->
        <script src="{{asset('assets/js/gallery.js  ')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script><!-- used for image lightbox -->
        <script src="{{asset('assets/owl-carousel/owl.carousel.min.js')}}"></script><!-- Carousels script -->
        <script src="{{asset('assets/js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
        <script src="{{asset('assets/js/include.js')}}"></script><!-- custom js functions -->
        <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script><!-- jQuery isotope plugin -->
        <script src="{{asset('assets/js/instagram-stream.jquery.js')}}"></script><!-- instagram stream plugin -->
        <script src="{{asset('assets/js/TweenMax.min.js')}}"></script> <!-- Plugin for smooth scrolling-->
        <script src="{{asset('assets/js/retina.min.js')}}"></script><!-- retina images script -->
        <script src="{{asset('assets/js/ScrollToPlugin.min.js')}}"></script> <!-- Plugin for smooth scrolling-->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                if ($('#masterslider').length) {
                    var slider = new MasterSlider();
                    slider.setup('masterslider', {
                        width: 1920,
                        height: 1080,
                        space: 0,
                        layout: "fullwidth",
                        speed: 50,
                        centerControls: false,
                        loop: false,
                        autoplay: false,
                        parallaxMode: "mouse"
                    });
                    MSScrollParallax.setup(slider, 50, 80, true);
                }

                if ($('.triggerZoom').length) {
                    //GALLERY LIGHTBOX
                    $('.triggerZoom').magnificPopup({
                        type: 'image',
                        gallery: {
                            enabled: true
                        }
                    });
                }

                // EVENTS CAROUSEL START 
                $("#events-carousel").owlCarousel({
                    singleItem: true,
                    pagination: true,
                    autoPlay: true
                });

                // EVENTS CAROUSEL START 
                $("#events-carousel-partner").owlCarousel({
                    singleItem: true,
                    pagination: true,
                    autoPlay: true
                });

            });
            /* ]]> */
        </script>

    </body>
</html>