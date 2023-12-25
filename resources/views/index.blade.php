<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layout.head')
    <title>SALTY WAVES</title>
</head>

<body>
    @include('layout.header')
    {{--
        <div class="ot-hero-wrapper hero-1">
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
    </div>
    --}}
    <div class="ot-hero-wrapper hero-2">
        <div class="ot-hero-slide">
            <div class="ot-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_2_2.jpg') }}"></div>
            <div class="container z-index-common">
                <div class="hero-style2"><span class="sub-title hero-subtitle">Enjoy every surf moment with Salty Waves <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h1 class="hero-title">Tamraght or Taghazout ?</h1>
                    <h1 class="hero-title">Doesn't Matter</h1>
                    <p class="hero-text">Visit our surf hostel to create the best surf memories. Choose between wonderful accommodations in Tamraght and Taghazout.</p>
                    <div class="btn-group"><a href="{{ route('about', ['lang' => $lang]) }}" class="ot-btn">Salty Waves ? Check this out</a>
                        <a href="https://www.veed.io/embed/4941c311-1a0c-4015-9d6b-b454bc351e12"  class="video-link popup-video d-flex align-items-center">
                            <span class="play-btn style3"><i class="fas fa-play"></i></span> Feel The Mood of our inviting surf hostel in Tamraght</a></div>
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
                    <div class="title-area mb-35"><span class="sub-title">About Us <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">Welcome to Salty Waves, where every place feels like home</h2>
                    </div>
                    <p class="mt-n2 mb-35">Welcome to Salty Waves, where every place feels like home. Immerse yourself in the perfect blend of relaxation and adventure with our passion for surf, yoga, and memorable trips. Whether you're catching waves, finding your zen in our yoga sessions, or exploring exciting excursions, every moment is crafted to make your stay truly exceptional. Embrace the Salty Waves experience, where your home away from home is a gateway to unforgettable activities and cherished memories.</p>

                    <div class="title-area mb-35">
                    <h4 class="sec-title"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon" style="margin-right: 1rem"> Our Location</h4>
                </div>
                <p class="mt-n2 mb-35">To reach this charming spot, fly into Agadir, just a 45-minute drive away from our location in the Atlas Mountains. Marrakesh is another option, about three hours from the camp. We provide transfers from both airports. Public transportation and taxis are also available for you and your friends to easily access this scenic destination.</p>

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
                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_1.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">2800</span>+</h2>
                            <p class="counter-card_text">Our Explorers</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">22</span>+</h2>
                            <p class="counter-card_text">Years of Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_4.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">4</span>+</h2>
                            <p class="counter-card_text">Accommodations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space bg-smoke overflow-hidden">
        <div class="container">
            <div class="title-area text-center" >
                <span class="sub-title justify-content-center">
                    <span class="shape left"><span class="dots"></span></span> Top Destinations <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Popular destinations and Activities Nearby</h2>
                <p class="text-justify ">We don’t  only offer waves but also a variety of experiences!

                    For surf enthusiasts, we provide group surf coaching, group surf guiding, and private surf coaching. We also supply surfboards and wetsuits for unforgettable surf adventures.

                    Our talented yoga instructors craft inspiring yoga courses upon request, perfect for yoga enthusiasts in the popular location of Tamraght and Taghazout.

                    Immerse yourself in traditional Moroccan culture with a visit to our hammam. Choose between Hammam Traditional, Hammam Mira, Hammam Taziri, and Hammam Royal.
                    Relax with various massage options, including Relaxing Massage, Massage Special Black, Hot Stone Massage, and Massage 4 Hand.

                    Indulge in culinary delights by ordering delicious tagines directly from us. Additionally, we offer exciting activities such as quad biking, the cable car in Agadir, and excursions to the souk, Crocodile Park, and Imsouane. It's not just about surfing with us – it's about a comprehensive experience in the beautiful backdrop of Morocco!"
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-3 mb-40 mb-xl-0">
                    <div class="trip-details-slide ot-carousel" data-fade="true">
                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Paradise Valley</a></h3>
                                <p class="trip-text">River-fed swimming destination nestled between rocky cliffs, with natural pools & small waterfalls.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Agadir Small Desert</a></h3>
                                <p class="trip-text">
                                    Discover Agadir's Small Desert with Quad adventures. Experience the thrill of sandy terrains, blending tranquility and adrenaline. Create lasting memories in this unique landscape with every Quad ride.</p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Agadir cable car Telepherique</a></h3>
                                <p class="trip-text">Agadir Cable car ride is a spectacular new attraction in the regions of Agadir, Morocco.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Souk El Had d'Agadir</a></h3>
                                <p class="trip-text">One of the biggest souks in Morocco, this authentic traditional market features over 6,000 shops spread over 13 hectares in the center of Agadir. </p>
                            </div>
                        </div>
                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Surfing Classes</a></h3>
                                <p class="trip-text">Discover surfing with expert guidance. Join our personalized sessions, whether you're a beginner or honing your skills. Experience the joy of riding the waves and the freedom of the open sea!</p>
                            </div>
                        </div>

                        <div>
                            <div class="trip-card-details">
                                {{-- <span class="subtitle">Locations</span> --}}
                                <h3 class="trip-title"><a href="#">Yoga Activity</a></h3>
                                <p class="trip-text">Practice yoga at sunrise or sunset, learn to surf in clear waters and stay in relaxing accommodation. Eat delicious, healthy and nutritious Moroccan cuisine.</p>
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
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_2.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Quad Excitement in Agadir's Small Desert</a></h2></div>
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
                                <h2 class="trip-card__title box-title"><a href="#">Souk El Had d'Agadir</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_5.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Surfing Classes</a></h2></div>
                        </div>
                        <div class="trip-card">
                            <div class="trip-card__img"><img src="{{ asset('assets/img/trip/dest_1_6.jpg') }}" alt="Trip image"></div>
                            <div class="trip-card__content">
                                <div class="trip-card__location"><i class="fas fa-location-dot"></i></div>
                                <h2 class="trip-card__title box-title"><a href="#">Yoga Activity</a></h2></div>
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
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/surfandyogaposter.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="{{ route('surf-yoga', ['lang' => $lang]) }}">premuim SURF & YOGA Pack</a></h3><span class="tour-offer__subtitle" style="color: white">Premuim</span></div><span class="tour-offer__price"><span class="price" style="color: white">€340</span></span>
                        </div>
                        <p class="tour-offer__text">Experience the thrill of surfing amidst breathtaking landscapes. Our Level 1 package offers the perfect blend of waves, relaxation, and personalized guidance. Professionally optimize your surfing skills and make memories that last a lifetime.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tour-offer">
                    <div class="tour-offer__img"><img src="{{ asset('assets/img/surfnstays/surfcoachingposter.jpg') }}" alt="Tour Image"> <span class="tour-offer__tag">45% Off</span></div>
                    <div class="tour-offer__content">
                        <div class="tour-offer__top">
                            <div>
                                <h3 class="tour-offer__title box-title"><a href="{{ route('surf-coaching', ['lang' => $lang]) }}">popular SURF COACHING Pack</a></h3><span class="tour-offer__subtitle" style="color: white">Popular</span></div><span class="tour-offer__price"><span class="price" style="color: white">€340</span></span>
                        </div>
                        <p class="tour-offer__text">Experience the thrill of surfing amidst breathtaking landscapes. Our Level 1 package offers the perfect blend of waves, relaxation, and personalized guidance. Professionally optimize your surfing skills and make memories that last a lifetime.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('layout.other.video-says')


    @include('layout.footer')



</body>

</html>
