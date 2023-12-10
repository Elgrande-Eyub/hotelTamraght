<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Packages</title>
   @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Packages</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>Packages</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">

                            <div class="tour-card">
                                <div class="tour-card__img"><img src=" {{ asset('assets/img/surfnstays/5surfnstays.jpg') }}" alt="Tour Image"> <span class="tour-card__tag"><i class="far fa-heart"></i></span></div>
                                <div class="tour-card__content">
                                    <div class="tour-card__top"><a href="https://www.google.com/maps" class="tour-card__location"><i class="fa-light fa-location-dot"></i> Tamraght</a>
                                        <div class="tour-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                    </div>
                                    <h3 class="tour-card__title"><a href="{{ route('hostel-tamraght', ['lang' => $lang]) }}">5 Surf N' Stays</a></h3>
                                    <div class="tour-meta"><span><i class="fa-light fa-clock"></i> 5 Day</span> <span><i class="fa-light fa-turn-up"></i> Level 1</span></div>
                                    <div class="tour-card__bottom"><span class="tour-card__price">From <span class="price">€340</span></span> <a href="tour-details.html" class="link-btn">See Details <i class="fas fa-arrow-up-right"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">


                                <div class="tour-card">
                                    <div class="tour-card__img"><img src=" {{ asset('assets/img/surfnstays/surfnstaysplus.jpg') }}" alt="Tour Image"> <span class="tour-card__tag"><i class="far fa-heart"></i></span></div>
                                    <div class="tour-card__content">
                                        <div class="tour-card__top"><a href="https://www.google.com/maps" class="tour-card__location"><i class="fa-light fa-location-dot"></i> Tamraght</a>
                                            <div class="tour-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                        </div>
                                        <h3 class="tour-card__title"><a href="{{ route('hostel-tamraght', ['lang' => $lang]) }}">Surf N' Stays +PLUS</a></h3>
                                        <div class="tour-meta"><span><i class="fa-light fa-clock"></i> 7 Day</span> <span><i class="fa-light fa-turn-up"></i> Level 2</span></div>
                                        <div class="tour-card__bottom"><span class="tour-card__price">From <span class="price">€470</span></span> <a href="tour-details.html" class="link-btn">See Details <i class="fas fa-arrow-up-right"></i></a></div>
                                    </div>
                                </div>


                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">


                                <div class="tour-card">
                                    <div class="tour-card__img"><img src=" {{ asset('assets/img/surfnstays/surfexplorenstays.jpg') }}" alt="Tour Image"> <span class="tour-card__tag"><i class="far fa-heart"></i></span></div>
                                    <div class="tour-card__content">
                                        <div class="tour-card__top"><a href="https://www.google.com/maps" class="tour-card__location"><i class="fa-light fa-location-dot"></i> Tamraght</a>
                                            <div class="tour-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                                        </div>
                                        <h3 class="tour-card__title"><a href="{{ route('hostel-tamraght', ['lang' => $lang]) }}">Surf Explore N' Stays</a></h3>
                                        <div class="tour-meta"><span><i class="fa-light fa-clock"></i> 7 Day</span> <span><i class="fa-light fa-turn-up"></i> Level 3</span></div>
                                        <div class="tour-card__bottom"><span class="tour-card__price">From <span class="price">€540</span></span> <a href="tour-details.html" class="link-btn">See Details <i class="fas fa-arrow-up-right"></i></a></div>
                                    </div>
                                </div>


                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
   @include('layout.footer')
</body>

</html>
