<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>PT BAJA</title>
        <link rel="canonical" href="">
        <link rel="icon" type="image/png" href="img/ico.png">
        <meta name="description" content="PT BAJA.">
        <meta name="author" content="">
        <meta name="keywords" content="PT BAJA ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta property="og:title" content="PT BAJA">
        <meta property="og:type" content="website" />
        <meta property="og:description" content="PT BAJA.">
        <meta property="og:image" content="uploads/logo_kn_share.jpg">
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
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script><!-- used for image lightbox -->
        <script src="{{asset('assets/owl-carousel/owl.carousel.min.js')}}"></script><!-- Carousels script -->
        <script src="{{asset('assets/js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
        <script src="{{asset('assets/js/include.js')}}"></script><!-- custom js functions -->
        <script src="{{asset('assets/js/instagram-stream.jquery.js')}}"></script><!-- instagram stream plugin -->
        <script src="{{asset('assets/js/TweenMax.min.js')}}"></script> <!-- Plugin for smooth scrolling-->
        <script src="{{asset('assets/js/retina.min.js')}}"></script><!-- retina images script -->
        <script src="{{asset('assets/js/ScrollToPlugin.min.js')}}"></script> <!-- Plugin for smooth scrolling-->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1920, // slider standard width
                    height: 1080, // slider standard height
                    space: 0,
                    layout: "fullwidth",
                    speed: 50,
                    centerControls: false,
                    loop: false,
                    autoplay: false,
                    parallaxMode: "mouse"
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                MSScrollParallax.setup(slider, 50, 80, true);

                //GALLERY LIGHTBOX
                $('.triggerZoom').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });

                // EVENTS CAROUSEL START 
                $("#events-carousel").owlCarousel({
                    singleItem: true,
                    pagination: true,
                    autoPlay: true
                });

                // BOOKING FORM AJAX SUBMIT START
                $('.otw-widget-form .otw-submit').on('click', function (event) {
                    event.preventDefault();
                    var $form = $(this).closest('form');

                    var name = $form.find('.otw-reservation-name').val();
                    var email = $form.find('.otw-reservation-email').val();
					var hp = $form.find('.otw-reservation-hp').val();
                    var date = $form.find('.otw-reservation-date').val();
                    var time = $form.find('.otw-reservation-time').val();
                    var guests = $form.find('.otw-party-size-select').val();
                    var form_data = new Array({'Name': name, 'Email': email, 'HP': hp,'Date': date, 'Time': time, 'Guests': guests});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'book_table', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // BOOKING FORM AJAX SUBMIT END

                // INSTAGRAM STREAM START 
                $('.instagram-stream').instagramstream({
                    limit: 22, // number of images to fetch
                    username: 'yourusername', // your username
                    overlay: true, // add overlay layer of hover effect
                    textContainer: '.is-text', // default: '.is-text', pass jQuery object or selector
                    textPosition: '10', // place that at this position
                    textSize: '4', // size of text e.g. 1 - has size like one image; 2 - has size of two images etc.
                    imageQuality: 'standard', // standard | low | thumbnail; standard: 640 x 640px; low: 320 x 320px; thumbnail: 150 x 150px
                    accessToken: '' // your access token
                });

            });
            /* ]]> */
        </script>
    
    </body>
</html>