<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layout.head')
    <title>SALTY WAVES</title>
</head>

<body>
    @include('layout.header')
    {{-- <div class="ot-hero-wrapper hero-1">
        <div class="hero-slider ot-carousel" data-fade="true">
            <div class="ot-hero-slide">
                <div class="ot-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_5.jpg') }}"></div>
                <div class="container z-index-common">
                    <div class="hero-style1"><span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Relax & Enjoy <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h1 class="hero-title " style="color: white;"  data-ani="slideinup" data-ani-delay="0.2s">Tamraght or Taghazout ?</h1>
                        <h1 class="hero-title" style="color: white" data-ani="slideinup" data-ani-delay="0.3s">Doesn't Matter</h1>
                        <p class="hero-text" style="color: white" data-ani="slideinup" data-ani-delay="0.4s">Experience the best accommodation in Tamraght and Taghazout with us. where comfort meets perfection.</p><a href="about.html" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s">Learn More</a></div>
                </div>
            </div>
            <div class="ot-hero-slide">
                <div class="ot-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_2.png') }}"></div>
                <div class="container z-index-common">
                    <div class="hero-style1"><span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Relax & Enjoy <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h1 class="hero-title" style="color: white;" data-ani="slideinup" data-ani-delay="0.2s">Enjoy Holiday By</h1>
                        <h1 class="hero-title" style="color: white;" data-ani="slideinup" data-ani-delay="0.3s">Traveling</h1>
                        <p class="hero-text" style="color: white;" data-ani="slideinup" data-ani-delay="0.4s">Fine Hotel And Ticket With Best Experience. Intrinsicly architect superior core competencies vis-a-vis interactive partnerships.</p><a href="about.html" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s">Learn More</a></div>
                </div>
            </div>
            <div class="ot-hero-slide">
                <div class="ot-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_3.jpg') }}"></div>
                <div class="container z-index-common">
                    <div class="hero-style1"><span class="sub-title hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">Relax & Enjoy <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h1 class="hero-title" style="color: white;" data-ani="slideinup" data-ani-delay="0.2s">Start Your Travel</h1>
                        <h1 class="hero-title" style="color: white;" data-ani="slideinup" data-ani-delay="0.3s">With SALTY WAVES</h1>
                        <p class="hero-text " style="color: white;" data-ani="slideinup" data-ani-delay="0.4s">Fine Hotel And Ticket With Best Experience. Intrinsicly architect superior core competencies vis-a-vis interactive partnerships.</p><a href="about.html" class="ot-btn" data-ani="slideinup" data-ani-delay="0.5s">Learn More</a></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="ot-hero-wrapper hero-2">
        <div class="ot-hero-slide">
            <div class="ot-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_2_2.jpg') }}"></div>
            <div class="container z-index-common">
                <div class="hero-style2"><span class="sub-title hero-subtitle">Enjoy Every Good Moment <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h1 class="hero-title">Tamraght or Taghazout ?</h1>
                    <h1 class="hero-title">Doesn't Matter</h1>
                    <p class="hero-text">Experience the best accommodation in Tamraght and Taghazout with us. where comfort meets perfection.</p>
                    <div class="btn-group"><a href="{{ route('about', ['lang' => $lang]) }}" class="ot-btn">Salty Waves ? Check this out</a> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-link popup-video"><span class="play-btn style3"><i class="fas fa-play"></i></span> Feel The Mood </a></div>
                </div>
            </div>
        </div>
        <div class="tree-1"><img src="{{ asset('assets/img/hero/tree_1.svg') }}" alt="tree"></div>
        <div class="tree-2"><img src="{{ asset('assets/img/hero/tree_2.svg') }}" alt="tree"></div>
        <div class="cloud-1"><img src="{{ asset('assets/img/hero/cloud_1.png') }}" alt="cloud"></div>
        <div class="cloud-2"><img src="{{ asset('assets/img/hero/cloud_2.png') }}" alt="cloud"></div>
        <div class="cloud-3"><img src="{{ asset('assets/img/hero/cloud_3.png') }}" alt="cloud"></div>
    </div>

    <div class="booknow">

         <a href=" {{ route('contact', ['lang' => $lang]) }}" class="ot-btn booknow-btn" >@lang('index.booknow')</a></div>
   {{--  <div class="search-sec">
        <div class="container">
            <div class="search-box">
                <form action="https://www.adivaha.com/themeforest-SALTY WAVES/mail.php" method="POST" class="tour-search">
                    <div class="form-group"><select name="destination" id="destinationSelect" class="form-select nice-select"><option value="" disabled="disabled" selected="selected" hidden>Destination</option><option value="Switzerland">Switzerland</option><option value="Barcelona">Barcelona</option><option value="Amsterdam">Amsterdam</option><option value="Budapest City">Budapest City</option></select>                        <i class="fas fa-location-dot"></i></div>
                    <div class="form-group"><select name="destination" id="tourType" class="form-select nice-select"><option value="" disabled="disabled" selected="selected" hidden>Activities</option><option value="Travel">Travel</option><option value="Hiking">Hiking</option><option value="Air Ballon">Air Ballon</option><option value="Peak Climbing">Peak Climbing</option></select>                        <i class="fas fa-person-hiking"></i></div>
                    <div class="form-group"><select name="destination" id="durationselect" class="form-select nice-select"><option value="" disabled="disabled" selected="selected" hidden>Duration</option><option value="0 - 3 Days">0 - 3 Days</option><option value="0 - 7 Days">0 - 7 Days</option><option value="3 - 8 Days">3 - 8 Days</option><option value="7 - 12 Days">7 - 12 Days</option></select>                        <i class="fas fa-calendar-days"></i></div>
                    <div class="form-group"><select name="destination" id="budgetSelect" class="form-select nice-select"><option value="" disabled="disabled" selected="selected" hidden>Budget</option><option value="100€ - 300€">100€ - 300€</option><option value="300€ - 700€">300€ - 700€</option><option value="700 - 1000€">700 - 1000€</option><option value="1000€ - 1500€">1000€ - 1500€</option></select>                        <i class="far fa-circle-dollar"></i></div>
                    <div class="form-btn"><button class="ot-btn">Search</button></div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="{{ asset('assets/img/normal/about_1_1.png') }}" alt="About"></div>
                        <div class="img2"><img src="{{ asset('assets/img/normal/about_1_2.png') }}" alt="About"></div>
                        <div class="shape1"><img src="{{ asset('assets/img/normal/about_shape_1.png') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6 pe-xl-4">
                    <div class="title-area mb-35"><span class="sub-title">Get About Us <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">Welcome to Salty Waves, where every stay feels like home</h2>
                    </div>
                    <p class="mt-n2 mb-35">Progressively impact multidisciplinary leadership skills via e-business leadership skills. Holisticly repurpose multifunctional data before turnkey information. Globally restore client-focused potentialities before scalable core competencies.</p>

                    <div class="title-area mb-35">
                    <h4 class="sec-title"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon" style="margin-right: 1rem"> Our Location</h4>
                </div>
                <p class="mt-n2 mb-35">Progressively impact multidisciplinary leadership skills via e-business leadership skills. Holisticly repurpose multifunctional data before turnkey information. Globally restore client-focused potentialities before scalable core competencies.</p>

                   {{--  <div class="about-media-wrap">
                        <div class="about-media">
                            <div class="about-media_icon">
                                <img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-media_title box-title">Our Location</h3>
                                <p class="about-media_text">we guarantee a legacy of excellence in every moment you spend.</p>
                                <p class="about-media_text">we guarantee a legacy of excellence in every moment you spend.</p>
                            </div>
                        </div>

                    </div> --}}
                    <div class="btn-group"><a href="{{ route('about', ['lang' => $lang]) }}" class="ot-btn">Discover more</a>
                        <div class="customer-avater-wrap">
                            <div class="customer-avater-group">
                                <div class="customer-avater"><img src="{{ asset('assets/img/normal/avater_1_1.jpg') }}" alt="avater"></div>
                                <div class="customer-avater"><img src="{{ asset('assets/img/normal/avater_1_2.jpg') }}" alt="avater"></div>
                                <div class="customer-avater"><img src="{{ asset('assets/img/normal/avater_1_3.jpg') }}" alt="avater"></div>
                                <div class="customer-avater"><img src="{{ asset('assets/img/normal/avater_1_4.jpg') }}" alt="avater"></div>
                            </div>
                            <p class="mb-0"><span class="text-theme fs-md fw-bold">500k+</span> Happy Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-bottom">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_1.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">117,325</span>+</h2>
                            <p class="counter-card_text">Our Explorers</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">172</span>+</h2>
                            <p class="counter-card_text">Destinations</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_3.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">12,542</span>+</h2>
                            <p class="counter-card_text">More Trips</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_4.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">12</span>+</h2>
                            <p class="counter-card_text">Accommodations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space bg-smoke overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Top Destinations <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Popular Destinations N' Activities</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-3 mb-40 mb-xl-0">
                    <div class="trip-details-slide ot-carousel" data-fade="true">
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="destination.html">Paradise Valley</a></h3>
                                <p class="trip-text">River-fed swimming destination nestled between rocky cliffs, with natural pools & small waterfalls.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="destination.html">Agadir Small Desert</a></h3>
                                <p class="trip-text">Simplify Globally pandemic e-business via functionalized e-business. Rapidiously covalent leadership whereas distributed results drive.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="destination.html">Agadir cable car Telepherique</a></h3>
                                <p class="trip-text">Agadir Cable car ride is a spectacular new attraction in the regions of Agadir, Morocco.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="destination.html">Moroccan Cooking Class</a></h3>
                                <p class="trip-text">Learn the fine art of Moroccan cuisine from a professional chef during this hands-on private masterclass i</p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box text-center text-xl-start"><button data-slick-prev=".trip-details-slide" class="slick-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slick-next=".trip-details-slide" class="slick-arrow default"><i class="far fa-arrow-right"></i></button></div>
                </div>
                <div class="col-xl-9">
                    <div class="trip-tab" data-asnavfor=".trip-details-slide">
                        <div class="trip-card active">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_1.png') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="destination-details.html">Paradise Valley</a></h2><span class="trip-card__count">6+ Trips</span> <a href="destination.html" class="ot-btn">Explore</a></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_2.png') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="destination-details.html">Agadir Small Desert</a></h2><span class="trip-card__count">8+ Trips</span> <a href="destination.html" class="ot-btn">Explore </a></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_3.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="destination-details.html">Agadir cable car Telepherique</a></h2><span class="trip-card__count">6+ Trips</span> <a href="destination.html" class="ot-btn">Explore</a></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_4.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="destination-details.html">Private Traditional Moroccan Cooking Class</a></h2><span class="trip-card__count">5+ Trips</span> <a href="destination.html" class="ot-btn">Explore All</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-lg-block" data-top="2%" data-left="0%"><img src="{{ asset('assets/img/shape/plane_shape_1.svg') }}" alt="shapes"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="2%" data-right="0%"><img src="{{ asset('assets/img/shape/plane_shape_2.svg') }}" alt="shapes"></div>
    </div>
  {{--   <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="title-area mb-30 text-center text-xl-start"><span class="sub-title justify-content-center justify-content-xl-start"><span class="shape left d-inline-block d-xl-none"><span class="dots"></span></span> Why Choose Us <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">Get The Best Travel Experience</h2>
                    </div>
                    <p class="mt-n2 mb-35 text-center text-xl-start">Professionally engineer world-class leadership skills after end-to-end growth strategies. Assertively create innovative schemas through installed base potentialities.</p>
                    <div class="feature-media-wrap">
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-calendar-clock"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Set Travel Plan</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-compass"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Explore Around</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-person-sign"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Best Guide</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-headset"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Support 24/7</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-hotel"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Luxary Hotel</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                        <div class="feature-media">
                            <div class="feature-media__icon"><i class="fa-solid fa-file-check"></i></div>
                            <div class="media-body">
                                <h3 class="feature-media__title">Easy Booking</h3>
                                <p class="feature-media__text">Distinctively impact client-centered ideas via future-proof paradigms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mt-40 mt-xl-0">
                    <div class="text-center"><img src="{{ asset('assets/img/normal/travel_1_1.png') }}" alt="image"></div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <section class="" data-pos-for="#tour-sec" data-sec-pos="bottom-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30 mb-xl-0">
                    <div class="offer-card" data-bg-src="{{ asset('assets/img/bg/offer_bg_1.jpg') }}">
                        <h2 class="offer-card__offer">45% OFF</h2>
                        <h3 class="offer-card__text box-title">Explore Salty Waves Hotel Booking.</h3><a href="contact.html" class="ot-btn">Book Now</a></div>
                </div>
                <div class="col-lg-6">
                    <div class="offer-card" data-bg-src="{{ asset('assets/img/bg/offer_bg_2.jpg') }}">
                        <h2 class="offer-card__offer">35% OFF</h2>
                        <h3 class="offer-card__text box-title">Our Offers Are On Fire Grab It Now.</h3><a href="contact.html" class="ot-btn">Buy Now</a></div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="space bg-repeat bg-smoke" id="tour-sec" data-bg-src="{{ asset('assets/img/bg/pattern_bg_1.png') }}">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Featured Accommodations <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Our Accommodations</h2>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    @include('layout.accommodations.tamraght-hostle')
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    @include('layout.accommodations.surf-riad')
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    @include('layout.accommodations.apartment-n6')
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    @include('layout.accommodations.apartment-n4')
                </div>
            </div>
        </div>
    </section>
    <section class="space-top" data-bg-src="{{ asset('assets/img/bg/deal_bg_1.jpg') }}">
        <div class="container">
            <div class="row text-center text-lg-start justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-8 mb-n2 mb-lg-0">
                    <div class="title-area"><span class="sub-title justify-content-center justify-content-lg-start"><span class="shape left d-inline-block d-lg-none"><span class="dots"></span></span> Deals & Offers <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title text-white">Our Packs</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box style2"><button data-slick-prev="#dealSlide1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slick-next="#dealSlide1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-0 ot-carousel" id="dealSlide1" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tour-offer">
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/5surfnstays.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="tour-details.html">5 Surf N' Stays</a></h3><span class="tour-offer__subtitle" style="color: white">Level 1</span></div><span class="tour-offer__price"><span class="price" style="color: white">€340</span></span>
                        </div>
                        <p class="tour-offer__text">Professionally optimize mission-critical networks rather than resource maximizing ideas globally.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tour-offer">
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/surfnstaysplus.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="tour-details.html">Surf N' Stays +PLUS</a></h3><span class="tour-offer__subtitle" style="color: white">Level 2</span></div><span class="tour-offer__price"><span class="price" style="color: white">€470</span></span>
                        </div>
                        <p class="tour-offer__text">Professionally optimize mission-critical networks rather than resource maximizing ideas globally.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tour-offer">
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/surfexplorenstays.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="tour-details.html">Surf Explore N' Stays</a></h3><span class="tour-offer__subtitle" style="color: white">Level 3</span></div><span class="tour-offer__price"><span class="price" style="color: white">€540</span></span>
                        </div>
                        <p class="tour-offer__text">Professionally optimize mission-critical networks rather than resource maximizing ideas globally.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tour-offer">
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/5surfnstays.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="tour-details.html">5 Surf N' Stays</a></h3><span class="tour-offer__subtitle" style="color: white">Level 1</span></div><span class="tour-offer__price"><span class="price" style="color: white">€340</span></span>
                        </div>
                        <p class="tour-offer__text">Professionally optimize mission-critical networks rather than resource maximizing ideas globally.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="space-top bg-auto" data-bg-src="{{ asset('assets/img/bg/bg_map_1.png') }}">
        <div class="">
            <div class="container">
                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Watch Our Story <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title">Unforgettable Travel Experiences<br>Get Your Guide</h2>
                    <div class="btn-group pb-3 mt-30 justify-content-center"><a href="contact.html" class="ot-btn">Contact Us</a> <a href="contact.html" class="ot-btn style3">Book Now</a></div>
                </div>
                <div class="ot-video" data-overlay="title" data-opacity="5" data-pos-for=".testi-sec" data-sec-pos="bottom-half"><img src="{{ asset('assets/img/normal/video_1.jpg') }}" alt="Video"> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style3 popup-video"><i class="fas fa-play"></i></a></div>
            </div>
        </div>
    </section>
    <section class="space-bottom">
        <div class="testi-sec space" data-bg-src="{{ asset('assets/img/bg/bg_map_2.png') }}">
            <div class="container">
                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Testimonials <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title">What Customer Say About SALTY WAVES</h2>
                </div>
                <div class="row slider-shadow ot-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
                    <div class="col-lg-6">
                        <div class="testi-card">
                            <div class="testi-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                            <p class="testi-card__text">“We stayed for 1 night before moving over to our surf camp but wish we had longer! The riad is so dreamy, peaceful yet located in the middle of Taghazout, seconds away from the beach and restaurants as well as all the surf schools etc. We arrived a little early, Ms Saadi was great in welcoming us and letting us leave bags until the place was ready for check in. Would definitely recommend !”</p>
                            <div class="testi-card__profile">
                                <div class="testi-card__avater"><img src="{{ asset('assets/img/testimonial/testi_1_1.png') }}" alt="Avater"></div>
                                <div class="media-body">
                                    <h3 class="testi-card__name">Jessie</h3><span class="testi-card__desig">Travler</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-card">
                            <div class="testi-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                            <p class="testi-card__text">“This is the perfect spot if you’re coming to surf, enjoy the beach, or eat at the many wonderful restaurants in Taghazout. Everything is just a few steps away! We spent most of our days surfing with the great crew from Surf Berbere, just a one minute walk from the door of this riad. They shuttled us to wherever the waves were best each day, and provided lunch, surf equipment and instruction...”</p>
                            <div class="testi-card__profile">
                                <div class="testi-card__avater"><img src="{{ asset('assets/img/testimonial/testi_1_2.png') }}" alt="Avater"></div>
                                <div class="media-body">
                                    <h3 class="testi-card__name">Marcia</h3><span class="testi-card__desig">Travler</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-card">
                            <div class="testi-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                            <p class="testi-card__text">“We stayed in two for four days, the apartment is really clean and spacious, the view is beautiful, it has an internal access (to the condominium) direct to the beach in front, everything is very easily reached and even if we did not have the car we were able to reach, for example, Anchor point in a very short time! Really helpful and kind, the owner and Salima, as we arrived before check-in time...”</p>
                            <div class="testi-card__profile">
                                <div class="testi-card__avater"><img src="{{ asset('assets/img/testimonial/testi_1_3.png') }}" alt="Avater"></div>
                                <div class="media-body">
                                    <h3 class="testi-card__name">Giada</h3><span class="testi-card__desig">Travler</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-card">
                            <div class="testi-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
                            <p class="testi-card__text">“Tayebi is a fantastic host. She personally welcomed us and gave us plenty of insight into the apartment. We didn’t have any issues for the duration of our stay so didn’t speak much more than that. The apartment itself is so homely, the outside area is outstanding. If you’re coming to Taghazout you really should stay here..”</p>
                            <div class="testi-card__profile">
                                <div class="testi-card__avater"><img src="{{ asset('assets/img/testimonial/testi_1_4.png') }}" alt="Avater"></div>
                                <div class="media-body">
                                    <h3 class="testi-card__name">Jordan</h3><span class="testi-card__desig">Travler</span></div>
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
