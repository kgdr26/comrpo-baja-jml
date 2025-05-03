@extends('main')
@section('content')

    <!-- .master-slider start -->
    <div id="masterslider" class="master-slider ms-skin-default">
        <!-- slide start -->
        <div class="ms-slide">
            <img src="{{asset('assets/masterslider/style/blank.gif')}}" data-src="{{asset('assets/img/slider/bgsld01.jpg')}}" alt="Kangen Nusantara" style="opacity: 0.2;"/> 

            <!-- slide heading layer -->
            <h3 class="ms-layer pi-caption02" 
                style="top: 350px; left: 860px;"
                data-type="text"
                data-effect="bottom(40)"
                data-duration="2000"
                data-ease="easeOutExpo"
                data-delay="1000"
                >
                discover
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
                kangen nusantara
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
                    <img src="img/pics/spices-left.png" alt="Kangen Nusantara" />
                </div><!-- .col-md-3 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6 col-sm-6 centered">
                    <div class="frame-box custom-img-background bkg-img2">
                        <div class="custom-heading style-1">
                            <h5 style="font-family:Trajan Pro Regular; color:#f36f21;letter-spacing:2px;">Tentang Kami</h5>
                            <h3 style="font-family:baskervillenormal; text-transform:none; letter-spacing:-2px;">the taste that you can trust!</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->

                        <p><span style="font-weight:800;">PT KANGEN NUSANTARA INDONESIA</span><br>
                                                        Adalah Perusahaan yang bergerak di bidang layanan jasa boga, yang menyediakan berbagai jenis layanan untuk memenuhi kebutuhan seperti Indutrial Catering (pabrik), Corporate Catering, Special Event, Restaurant, juga produk Hampers. Semua servis dibangun dan dikerjakan oleh koki  (chef) yang perpengalaman dan memiliki pengetahuan dan teknik kulinari yang bisa diandalkan bersama  anggota team  berbakat yang menghasilkan produk dan servis berkualitas tinggi yang bisa dipercaya
                                                    </p>
                    </div>
                </div><!-- .col-md-6 end -->

                <!-- .col-md-3 start -->
                <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                    <img src="img/pics/spices-right.png" alt="Kangen Nusantara" />
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark bkg-img3 custom-col-padding">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">daily food supply</h5>
                        <h2>INDUSTRIAL CATERING</h2>

                        <!-- .divider.style-2 start -->
                        <div class="divider style-2 center">
                            <span class="hr-double left"></span>
                            <span class="divider-svg">
                                <img src="img/svg/heading-icon.svg" alt="Kangen Nusantara">
                            </span>
                            <span class="hr-double right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark bkg-img4 custom-col-padding mb-100">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">For your special day</h5>
                        <h2>exceptional catering services</h2>

                        <!-- .divider.style-2 start -->
                        <div class="divider style-2 center">
                            <span class="hr-double left"></span>
                            <span class="divider-svg">
                                <img src="img/svg/heading-icon.svg" alt="Kangen Nusantara">
                            </span>
                            <span class="hr-double right"></span>
                        </div>
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
                                    <li class="event-item-list"><img src="img/pics/img-01.jpg" alt="Kangen Nusantara"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Katering</h5>
                                            <h3>KEGIATAN PERUSAHAAN</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta" style="color:#5b4c3d;">
                                            <li>Pertemuan</li>
                                            <li>Tim Building</li>
                                            <li>Pesta perusahaan</li>
                                        </ul><!-- .article-meta end -->
                                            <p style="text-align:justify;" align="left">
                                                                                                Merencanakan pertemuan bisnis penting dengan mitra Anda? Buat mereka terkesan dengan makan siang di Kangen Nusantara. Kangen Nusantara menyediakan berbagai macam hidangan, mulai dari makan siang bisnis hingga program team building khusus dan pesta perusahaan. Berapa pun ukuran dan acara pesta, spesialis katering kami akan merencanakan acara Anda sesuai dengan kebutuhan Anda.
                                                                                        </p>
                                        <a href="id/services.html" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="img/pics/img-09.jpg" alt="Kangen Nusantara"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Katering</h5>
                                            <h3>ACARA KHUSUS</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta">                                                
                                            <li>Anniversary</li>
                                            <li>Pernikahan</li>
                                            <li>Siraman</li>  
                                        </ul><!-- .article-meta end -->
                                        <p style="text-align:justify;" align="left">
                                                                                        Rayakan acara spesial Anda dalam suasana yang indah di Kangen Nusantara. Kerabat yang ramah dan kreatif, suasana yang bersahabat, dan staf yang sangat profesional akan membuat hari istimewa Anda indah dan menyenangkan. Anda dapat memilih dari beberapa menu siap saji untuk acara apa pun yang akan memuaskan berbagai selera. Bekerjasamalah dengan kami untuk menciptakan menu yang Anda inginkan.
                                                                                    </p>
                                        <a href="id/services.html" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
                                    </li><!-- .event-item-list.event-item-content end -->
                                </ul><!-- .event-item-container end -->
                            </div>
                            <div class="item">
                                <!-- .event-item-container start -->
                                <ul class="event-item-container">
                                    <li class="event-item-list"><img src="img/pics/img-10.jpg" alt="Kangen Nusantara"/></li>
                                    <!-- .event-item-list.event-item-content start -->
                                    <li class="event-item-list event-item-content centered">
                                        <div class="custom-heading style-1">
                                            <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">Katering</span></h5>
                                            <h3>ACARA SOSIAL & KELUARGA</h3>

                                            <!-- .divider.style-1 start -->
                                            <div class="divider style-1 center">
                                                <span class="hr-simple left"></span>
                                                <i class="fa fa-circle hr-icon"></i>
                                                <span class="hr-simple right"></span>
                                            </div>
                                        </div><!-- .custom-heading.style-2 end -->
                                        <ul class="article-meta">
                                            <li>Ulang tahun</li>
                                            <li>Reuni Keluarga</li>
                                            <li>dan sebagainya</li>
                                        </ul><!-- .article-meta end -->
                                            <p style="text-align:justify;" align="left">
                                            
                                            Rayakan ulang tahun, reuni keluarga, atau acara lainnya yang menyenangkan dan berkesan. Tim Kangen Nusasntara  memiliki pengalaman bertahun-tahun dalam perencanaan pesta dan akan memastikan pesta Anda sukses, menyenangkan, dan berkesan bagi Anda dan tamu! Saatnya berpesta!
                                            
                                            </p>

                                        <a href="id/services.html" class="more-details">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
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
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">exquisite cuisine</h5>
                        
                        
                        <h2>RESTO & HAMPERS</h2>

                        <!-- .divider.style-2 start -->
                        <div class="divider style-2 center">
                            <span class="hr-double left"></span>
                            <span class="divider-svg">
                                <img src="img/svg/heading-icon.svg" alt="Kangen Nusantara">
                            </span>
                            <span class="hr-double right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    
    
    <!-- .page-content start -->
    <div class="page-content custom-img-background dark bkg-img6 custom-col-padding">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">enjoyable & comfortable</h5>
                        
                        
                        <h2>CANTEEN MANAGEMENT</h2>

                        <!-- .divider.style-2 start -->
                        <div class="divider style-2 center">
                            <span class="hr-double left"></span>
                            <span class="divider-svg">
                                <img src="img/svg/heading-icon.svg" alt="Kangen Nusantara">
                            </span>
                            <span class="hr-double right"></span>
                        </div>
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
                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                    <img src="img/pics/img-02.jpg" alt="Kangen Nusantara" />
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-6 centered pt-150 open-table-widget-style-1">
                    <div class="custom-heading style-1">
                        <h5 style="font-family:Trajan Pro Regular; color:#f36f21;letter-spacing:2px;">Kontak</h5>
                        <h3>PESANAN & PERTANYAAN</h3>

                        <!-- .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->

                    <!-- Open table widget start -->
                    <div class="otw-bare-bones-style widget open-table-widget triggerAnimation animated" data-animate='fadeIn'>
                        <div class="otw-bare-bones">
                            <div class="otw-widget-form-wrap">
                                <form method="post" action="https://kangenusantara.com/contact_xt.php" name="form" id="contactform">
                                    <div class="otw-wrapper">

                                            <div class="otw-name-wrap otw-input-wrap">
                                            <input required name="Name" class="otw-reservation-name" type="text" placeholder="Nama/Perusahaan" >
                                        </div>
                                        <div class="otw-email-wrap otw-input-wrap">
                                            <input required name="Email" class="otw-reservation-email" type="text" placeholder="Email" >
                                        </div>
                                        
                                        <div class="otw-hp-wrap otw-input-wrap">
                                            <input required name="HP" class="otw-reservation-hp" type="text" placeholder="HP" >
                                        </div>
                                        
                                        <div class="otw-date-wrap otw-input-wrap">
                                            <input required name="Date" class="otw-reservation-date" type="date" value="mm/dd/yyyy" autocomplete="off" data-date-format="mm/dd/yyyy">
                                        </div>
                                        
                                        <div class="otw-party-size-wrap otw-input-wrap">
                                            <select name="partySize" required class="otw-party-size-select selectpicker">
                                                <option value="10" selected="selected"> 10 orang</option>
                                                <option value="20"> 20 orang</option>
                                                <option value="30"> 30 orang</option>
                                                <option value="40"> 40 orang</option>
                                                <option value="50"> 50 orang</option>
                                                <option value=">50"> >50 orang</option>
                                                <option value=">100"> >100 orang</option>
                                                <option value=">200"> >200 orang</option>
                                            </select>
                                        </div>
                                        
                                            <div align="center" class="otw-input-wrap">
                                            <div class="g-recaptcha" data-sitekey="6LdRUAIqAAAAAMOfwoFXUE2Qx1QZFX3eTcIDlQb7"></div>
                                        </div>

                                        <div class="otw-button-wrap">
                                            <input type="submit" class="otw-submit" value="Pesan">
                                        </div>
                                    </div>
                                </form>
                            </div><!-- .otw-widget-form-wrap end -->
                        </div>
                    </div><!-- Open table widget end -->
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                    <img src="img/pics/img-03.jpg" alt="Kangen Nusantara" />
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@stop