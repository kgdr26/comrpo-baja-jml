<!-- #header start -->
<header id="header">
    <!-- Main navigation and logo container -->
    <div class="header-inner">
        <!-- .container start -->
        <div class="container">
            <!-- .main-nav start -->
            <div class="main-nav">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- .navbar start -->
                        <nav class="navbar navbar-default nav-left">								
                        <!-- .navbar-header start -->
                            <div class="navbar-header">
                                <!-- .logo start -->
                                <div class="logo">
                                    <a href="">
                                        <img src="{{asset('assets/img/logo/logo2.png')}}" alt="Kangen Nusantara" style="width: 7rem;">
                                    </a>
                                </div><!-- logo end -->
                            </div><!-- .navbar-header end -->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav pi-nav">
                                    <li class="{{ is_active_controller('Beranda') }}"><a href="{{route('beranda')}}">Beranda</a></li>
                                    <li class="{{ is_active_controller('Tentang') }}"><a href="{{route('tentang')}}">Tentang</a></li>
                                    <li class="{{ is_active_controller('Menu') }}"><a href="{{route('menu')}}">Produk</a></li>
                                    <li class="{{ is_active_controller('Layanan') }}"><a href="{{route('layanan')}}">Partner</a></li>
                                    <li class="{{ is_active_controller('Galeri') }}"><a href="{{route('galeri')}}">Galeri</a></li>
                                    <li class="{{ is_active_controller('Kontak') }}"><a href="{{route('kontak')}}">Kontak</a></li> 
                                </ul><!-- .nav.navbar-nav.pi-nav end -->

                                <!-- Responsive menu start -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>

                                    <ul class="dl-menu">
                                        <li class="{{ is_active_controller('Beranda') }}"><a href="{{route('beranda')}}">Beranda</a></li>
                                        <li class="{{ is_active_controller('Tentang') }}"><a href="{{route('tentang')}}">Tentang</a></li>
                                        <li class="{{ is_active_controller('Menu') }}"><a href="{{route('menu')}}">Produk</a></li>
                                        <li class="{{ is_active_controller('Layanan') }}"><a href="{{route('layanan')}}">Partner</a></li>
                                        <li class="{{ is_active_controller('Galeri') }}"><a href="{{route('galeri')}}">Galeri</a></li>
                                        <li class="{{ is_active_controller('Kontak') }}"><a href="{{route('kontak')}}">Kontak</a></li>
                                    </ul><!-- .dl-menu end -->

                                </div><!-- (Responsive menu) #dl-menu end -->
                            </div><!-- .navbar.navbar-collapse end --> 
                        </nav><!-- .navbar end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->            
            </div><!-- .main-nav end -->
        </div><!-- .container end -->
    </div><!-- .header-inner end -->
</header><!-- #header end -->