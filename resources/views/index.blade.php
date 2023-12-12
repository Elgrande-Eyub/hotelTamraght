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
                    <div class="btn-group"><a href="{{ route('about', ['lang' => $lang]) }}" class="ot-btn">Salty Waves ? Check this out</a> <a href="https://www.veed.io/embed/4941c311-1a0c-4015-9d6b-b454bc351e12" class="video-link popup-video"><span class="play-btn style3"><i class="fas fa-play"></i></span> Feel The Mood </a></div>
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
         <a href=" {{ route('accommodations', ['lang' => $lang]) }}" class="ot-btn booknow-btn" >@lang('index.booknow')</a>
        </div>

    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="{{ asset('assets/img/normal/about_1_1.jpg') }}" alt="About"></div>
                        <div class="img2 col-hide"><img src="{{ asset('assets/img/normal/about_1_2.jpg') }}" alt="About"></div>
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
                                <h3 class="trip-title"><a href="#">Paradise Valley</a></h3>
                                <p class="trip-text">River-fed swimming destination nestled between rocky cliffs, with natural pools & small waterfalls.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="#">Agadir Small Desert</a></h3>
                                <p class="trip-text">Simplify Globally pandemic e-business via functionalized e-business. Rapidiously covalent leadership whereas distributed results drive.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="#">Agadir cable car Telepherique</a></h3>
                                <p class="trip-text">Agadir Cable car ride is a spectacular new attraction in the regions of Agadir, Morocco.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="#">Moroccan Cooking Class</a></h3>
                                <p class="trip-text">Learn the fine art of Moroccan cuisine from a professional chef during this hands-on private masterclass</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details"><span class="subtitle">Locations</span>
                                <h3 class="trip-title"><a href="#">Surfing Classes</a></h3>
                                <p class="trip-text">Discover surfing with expert guidance. Join our personalized sessions, whether you're a beginner or honing your skills. Experience the joy of riding the waves and the freedom of the open sea!</p>
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
                                <h2 class="trip-card__title box-title"><a href="#">Paradise Valley</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_2.png') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Agadir Small Desert</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_3.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Agadir cable car Telepherique</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_4.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Private Traditional Moroccan Cooking Class</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_5.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Surfing Classes</a></h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-lg-block" data-top="2%" data-left="0%"><img src="{{ asset('assets/img/shape/plane_shape_1.svg') }}" alt="shapes"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="2%" data-right="0%"><img src="{{ asset('assets/img/shape/plane_shape_2.svg') }}" alt="shapes"></div>
    </div>

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
                                <h3 class="tour-offer__title box-title"><a href="{{ route('surf-stay', ['lang' => $lang]) }}">Surf N' Stays</a></h3><span class="tour-offer__subtitle" style="color: white">Level 1</span></div><span class="tour-offer__price"><span class="price" style="color: white">€340</span></span>
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
                                <h3 class="tour-offer__title box-title"><a href="{{ route('surf-stayplus', ['lang' => $lang]) }}">Surf N' Stays +PLUS</a></h3><span class="tour-offer__subtitle" style="color: white">Level 2</span></div><span class="tour-offer__price"><span class="price" style="color: white">€470</span></span>
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
                                <h3 class="tour-offer__title box-title"><a href="{{ route('surf-explore-stay', ['lang' => $lang]) }}">Surf Explore N' Stays</a></h3><span class="tour-offer__subtitle" style="color: white">Level 3</span></div><span class="tour-offer__price"><span class="price" style="color: white">€540</span></span>
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

    @include('layout.other.video-says')


    @include('layout.footer')



</body>

</html>
