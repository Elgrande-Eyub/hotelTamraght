<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Accommodations</title>
   @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Accommodations</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Accommodations</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                           @include('layout.accommodations.tamraght-hostle')
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                            @include('layout.accommodations.surf-riad')
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                           @include('layout.accommodations.apartment-n6')
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6 mb-30">
                           @include('layout.accommodations.apartment-n4')
                        </div>

                    </div>

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">

                        <div class="widget widget_banner">
                            <div class="offer-banner">
                                <div class="banner-logo"><img width="40%" src="{{ asset('assets/img/logo/salty-waves-white.png') }}" alt="Travon"></div><span class="banner-subtitle">Happy Holiday</span>
                                <h3 class="banner-title">Adventure Ture</h3>
                                <div class="offer">
                                    <h6 class="offer-title"><span class="text-theme">Travon</span> Special</h6>
                                    <p class="offer-text"><span class="text-theme">30% off</span> On All Booking</p>
                                </div><a href="{{ route('contact', ['lang' => $lang]) }}" class="ot-btn">Get A Quote</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
   @include('layout.footer')
</body>

</html>
