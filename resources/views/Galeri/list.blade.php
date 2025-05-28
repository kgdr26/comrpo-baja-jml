@extends('main')
@section('content')

    <!-- .page-content start -->
    <div class="page-content custom-img-background dark page-title page-title-5 mb-100">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered">
                    <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                        <h5 style="font-family:Trajan Pro Regular; color:#fbda9a;letter-spacing:2px;">Gallery</h5>
                        <h3 style="font-family:baskervillenormal; text-transform:none; letter-spacing:-2px;">PT MANDALA MAKMUR SENOTSA</h3>
                    </div><!-- .custom-heading.style-1 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content">
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row gallery-filters">
                <div class="col-md-12 mb-20 centered triggerAnimation animated" data-animate='fadeIn'>
                    <div class="custom-heading style-1">
                        <h5 style="font-family:Trajan Pro Regular; color:#f37021;letter-spacing:2px;">PT MANDALA MAKMUR SENTOSA</h5>
                        <h3>Gallery</h3>

                        <!-- .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->
                    
                </div><!-- .col-md-12 end -->                    
            </div><!-- .row.gallery-filters end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <ul id="galleryitems" class="isotope isotopeitems-full">
                    @php
                    $files = [
                        "CNP.jpg",
                        "HB.jpg",
                        "Hollow.avif",
                        "img1.jpg",
                        "img2.jpg",
                        "img3.jpg",
                        "img4.jpg",
                        "IWF.jpg",
                        "pipa besi.jpg",
                        "Plat Bordes.jpg",
                        "Plat Galvanis.jpeg",
                        "Plat Hitam.png",
                        "Plat Kapal.jpg",
                        "Plat Strip.jpg",
                        "Siku.jpeg",
                        "UNP.jpg"
                    ];    
                    @endphp

                    @foreach ($files as $file)
                        
                        <li class="col-xs-6 col-md-3 isotope-item">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="{{ asset('assets/img/galery/'.$file) }}" alt="PT MANDALA MAKMUR SENTOSA"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="{{ asset('assets/img/galery/'.$file) }}" title="{{ $file }}" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                    @endforeach

                </ul><!-- #galleryitems.isotope end -->
            </div><!-- .row end -->
        </div><!-- .container-fluid end -->
    </div><!-- .page-content end -->

@stop