<div class="preloader">
    <button class="ot-btn style3 preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="ot-widget-about">
                <div class="about-logo">
                    <a href="{{ route('about', ['lang' => $lang]) }}"><img src="{{ asset('assets/img/logo/salty-waves-white.png') }}" alt="SALTY WAVES"></a>
                </div>
                <p class="about-text"></p>
                <div class="ot-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/salty_waves_taghazout"><i class="fab fa-instagram"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
            </div>
        </div>

        <div class="widget footer-widget">
            <h3 class="widget_title">Contact Us</h3>
            <div class="ot-widget-contact">
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                    <p class="info-box_text">Tamraght-Taghazout , Agadir , Morocco</p>
                </div>
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                    <p class="info-box_text">
                        <a href="tel:+4917624898825" class="info-box_link">+49 1762 489 8825</a>
                        <a href="tel:+212675111894" class="info-box_link">+212 6 75 11 18 94</a></p>
                </div>
                <div class="info-box">
                    <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                    <p class="info-box_text"><a href="mailto:info@saltywaves.com" class="info-box_link">info@saltywaves.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i class="fal fa-search"></i></button></form>
</div>
<div class="ot-menu-wrapper">
    <div class="ot-menu-area text-center"><button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('index', ['lang' => $lang]) }}"><img width="189" height="54" src="{{ asset('assets/img/logo/salty-waves.png') }}" alt="SALTY WAVES"></a>
        </div>
        <div class="ot-mobile-menu">
            <ul>
                <li class="menu-item-has-children"><a href="{{ route('index', ['lang' => $lang]) }}">@lang('index.menu.home')</a>

                </li>
                <li class="menu-item-has-children"><a href="{{ route('about', ['lang' => $lang]) }}">@lang('index.menu.about')</a>

                </li>
                <li class="menu-item-has-children"><a href="#">@lang('index.menu.accommodations')</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('taghazout', ['lang' => $lang]) }}">Taghazout</a></li>
                        <li><a href="{{ route('tamraght', ['lang' => $lang]) }}">Tamraght</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">@lang('index.menu.package')</a>
                    <ul class="sub-menu">
                        <li><a href="tour.html">@lang('index.menu.packages.surf')</a></li>
                        <li><a href="tour-details.html">@lang('index.menu.packages.yoga')</a></li>
                    </ul>
                </li>



                <li><a href="{{ route('contact', ['lang' => $lang]) }}">@lang('index.menu.contact')</a></li>
            </ul>
        </div>
    </div>
</div>
<header class="ot-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-center align-items-center text-center">
                <div class="col-auto  d-lg-block">
                    <div class="header-links">
                        <ul>

                            <li class="d-none d-xl-inline-block"><i class="fal fa-phone"></i><a href="tel:+4917624898825">+49 1762 489 8825</a></li>
                            <li class="d-none d-xl-inline-block"><i class="fal fa-envelope"></i><a href="mailto:info@SALTY WAVES.com">info@saltywaves.com</a></li>
                            <li class="d-none d-xl-inline-block"><i class="fal fa-location-dot"></i>Tamraght-Taghazout , Agadir , Morocco</li>
                            <li class="d-block d-xl-none"><i class="fa-regular fa-person-snowboarding p-7" style="margin: 0"></i>Welcome to Salty Waves<i class="fa-regular fa-person-snowboarding p-7" style="margin-left: 7px"></i></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo text-center">
                            <a href="{{ route('index', ['lang' => $lang]) }}"><img width="189" height="54" src="{{ asset('assets/img/logo/salty-waves.png') }}" alt="SALTY WAVES" ></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('index', ['lang' => $lang]) }}"><i class="fa-regular fa-house"></i> @lang('index.menu.home')</a>

                                </li>
                                <li><a href="{{ route('about', ['lang' => $lang]) }}"><i class="fa-regular  fa-circle-info"></i> @lang('index.menu.about')</a>

                                </li>
                         <li class="menu-item-has-children"><a href="#"><i class="fa-regular fa-hotel"></i> @lang('index.menu.accommodations')</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('taghazout', ['lang' => $lang]) }}"><i class="fa-duotone fa-location-dot p-7"></i> Taghazout</a></li>
                                        <li><a href="{{ route('tamraght', ['lang' => $lang]) }}"><i class="fa-duotone fa-location-dot p-7"></i> Tamraght</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#"><i class=" fa-light fa-hand-holding-heart"></i> @lang('index.menu.package')</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html"><i class="fa-regular fa-person-snowboarding p-7"></i> @lang('index.menu.packages.surf')</a></li>
                                        <li><a href="team.html"><i class="fa-regular fa-spa p-7"></i> @lang('index.menu.packages.yoga')</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact', ['lang' => $lang]) }}"><i class="fa-regular fa-messages"></i> @lang('index.menu.contact')</a></li>
                            </ul>
                        </nav><button type="button" class="ot-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button></div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            {{-- <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>  --}}
                            <a href="#" class="icon-btn sideMenuToggler"><i class="fa-regular fa-bars"></i></a>
                             <a href=" {{ route('contact', ['lang' => $lang]) }}" class="ot-btn ml-25">@lang('index.booknow')</a></div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>