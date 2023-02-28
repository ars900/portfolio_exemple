
<header>
    <div id="sticky-header" class="menu__area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu__wrap">
                            <nav class="menu__nav">
                                <div class="logo">
                                     <a href="{{ url('/') }}" class="logo__black"><img style = "width:100px;" src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                     <a href="{{ url('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                                </div>
                                <div class="navbar__wrap main__menu d-none d-xl-flex">
                                     <ul class="navigation">
                                         <li class=""><a href="{{ url('/') }}">Home</a></li>
                                         <li class=""><a href="{{ route('about_page.index') }}">About</a></li>
                                         <li class=""><a href="{{ route('portfolio_page.index') }}">Portfolio</a></li>
                                         <li class=""><a href="{{ route('blog_page.index') }}">Our Blog</a></li>
                                         <li class=""><a href="{{ route('contact_page.index') }}">contact us</a></li>
                                     </ul>
                                </div>
                                <div class="header__btn d-none d-md-block">
                                     <a href="{{ route('contact_page.index') }}" class="btn">Contact Us</a>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile__menu">
                            <nav class="menu__box">
                                <div class="close__btn"><i class="fal fa-times"></i></div>
                                <div class="nav-logo">
                                     <a href="{{ url('/') }}" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                     <a href="{{ url('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                                </div>
                                <div class="social-links">
                                     <ul class="clearfix">
                                         <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                         <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                         <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                         <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                         <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                     </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
         </div>
</header>
