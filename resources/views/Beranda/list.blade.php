@extends('main')
@section('content')

    <!-- .master-slider start -->
    <div id="masterslider" class="master-slider ms-skin-default">
        <!-- slide start -->
        <div class="ms-slide">
            <img src="{{asset('assets/masterslider/style/blank.gif')}}" data-src="{{asset('assets/img/slider/bgsld01.jpg')}}" alt="Lorem Ipsume" style="opacity: 0.5;"/> 

            <!-- slide heading layer -->
            <h3 class="ms-layer pi-caption02" 
                style="top: 350px; left: 930px;"
                data-type="text"
                data-effect="bottom(40)"
                data-duration="2000"
                data-ease="easeOutExpo"
                data-delay="1000"
                >
                Welcome
            </h3>
            <!-- slide heading layer -->
            <h2 class="ms-layer pi-caption01 pi-caption01jarak" 
                style="top: 370px; "
                data-type="text"
                data-effect="bottom(40)"
                data-duration="2000"
                data-ease="easeOutExpo"
                data-delay="800"
                >
                PT MANDALA MAKMUR SENTOSA
            </h2>
        </div><!-- slide end -->
    </div>
    <!-- .master-slider end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background bkg-img1">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-3 start -->
                <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                    <img src="{{asset('assets/img/galery/img1.jpg')}}" alt="Lorem Ipsume" />
                </div><!-- .col-md-3 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6 centered">
                    <div class="frame-box custom-img-background bkg-img2">
                        <div class="custom-heading style-1">
                            <h5 style="font-family:Trajan Pro Regular; color:#FFFFFF;letter-spacing:2px;">Selamat Datang</h5>
                            <h3 style="font-family:baskervillenormal; text-transform:none; letter-spacing:-2px;">PT MANDALA MAKMUR SENTOSA</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->

                        <p style="color:#FFFFFF;">
                         PT Mandala Makmur Sentosa, mitra terpercaya Anda dalam solusi baja berkualitas tinggi. Dengan pengalaman bertahun-tahun di industri baja, kami berkomitmen untuk menyediakan produk yang kuat, tahan lama, dan inovatif guna mendukung berbagai kebutuhan konstruksi dan manufaktur.
                        </p>
                    </div>
                </div><!-- .col-md-6 end -->

                <!-- .col-md-3 start -->
                <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                    <img src="{{asset('assets/img/galery/img2.jpg')}}" alt="Lorem Ipsume" />
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark bkg-img3 custom-col-padding mb-100">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">PT MANDALA MAKMUR SENTOSA</h5>
                        <p>"Kami mengutamakan kualitas, keandalan, dan pelayanan terbaik untuk memastikan kepuasan pelanggan. Jelajahi website kami untuk mengenal lebih jauh produk dan layanan unggulan yang dirancang khusus untuk memenuhi standar tertinggi di pasar."</p>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="events-carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="{{asset('assets/img/galery/img1.jpg')}}" alt="Lorem Ipsume"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Kualitas Produk Terjamin</h5>
                                            <h3>Baja Berkualitas Tinggi untuk Berbagai Kebutuhan?</h3>
                                        </div>
                                        <!-- .article-meta end -->
                                        <p style="text-align:justify;" align="left">
                                        Kami menghadirkan produk baja dengan standar mutu tertinggi, tahan lama, dan sesuai dengan standar nasional maupun internasional. PT Mandala Makmur Sentosa menjamin setiap produk siap mendukung proyek konstruksi Anda dengan kualitas terbaik.
                                        </p>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="{{asset('assets/img/galery/img3.jpg')}}" alt="Lorem Ipsume"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Teknologi dan Inovasi Modern</h5>
                                            <h3>Inovasi dalam Setiap Produk</h3>
                                        </div>
                                        <!-- .article-meta end -->
                                        <p style="text-align:justify;" align="left">
                                        Menggunakan teknologi terbaru dan proses produksi yang efisien, kami memastikan produk baja kami tidak hanya kuat, tetapi juga ramah lingkungan dan sesuai kebutuhan modern industri. Kami terus berinovasi untuk memberikan solusi terbaik bagi pelanggan.
                                        </p>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="{{asset('assets/img/galery/img4.jpg')}}" alt="Lorem Ipsume"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Layanan Pelanggan Profesional</h5>
                                            <h3>Solusi Terpercaya dan Layanan Prima</h3>
                                        </div>
                                        <!-- .article-meta end -->
                                        <p style="text-align:justify;" align="left">
                                        Kami percaya bahwa pelayanan yang cepat, tepat, dan profesional adalah kunci kesuksesan. Tim kami siap memberikan konsultasi dan dukungan penuh agar Anda mendapatkan produk yang sesuai dan layanan terbaik.
                                        </p>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                        </div><!-- .owl-carousel.owl-theme end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@stop