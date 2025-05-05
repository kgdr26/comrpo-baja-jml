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
    </div><!-- .master-slider end -->

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
                            <h5 style="font-family:Trajan Pro Regular; color:#f36f21;letter-spacing:2px;">Lorem Ipsum</h5>
                            <h3 style="font-family:baskervillenormal; text-transform:none; letter-spacing:-2px;">Where does it come from?</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->

                        <p><span style="font-weight:800;">Lorem Ipsum</span><br>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
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
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">Lorem Ipsum</h5>
                        <h2>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h2>
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
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Lorem Ipsum</h5>
                                            <h3>What is Lorem Ipsum?</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta" style="color:#5b4c3d;">
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                        </ul><!-- .article-meta end -->
                                            <p style="text-align:justify;" align="left">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        <a href="" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="{{asset('assets/img/galery/img2.jpg')}}" alt="Lorem Ipsume"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Lorem Ipsum</h5>
                                            <h3>What is Lorem Ipsum?</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta" style="color:#5b4c3d;">
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                        </ul><!-- .article-meta end -->
                                            <p style="text-align:justify;" align="left">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        <a href="" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
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
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Lorem Ipsum</h5>
                                            <h3>What is Lorem Ipsum?</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta" style="color:#5b4c3d;">
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                            <li>Lorem Ipsum</li>
                                        </ul><!-- .article-meta end -->
                                            <p style="text-align:justify;" align="left">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        <a href="" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                        </div><!-- .owl-carousel.owl-theme end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark bkg-img5 custom-col-padding">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">Lorem Ipsum</h5>
                        <h2>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h2>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@stop