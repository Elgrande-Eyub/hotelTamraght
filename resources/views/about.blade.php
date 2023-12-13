<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - About Us</title>
    @include('layout.head')
</head>

<body>
  @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">SALTY WAVES</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="{{ asset('assets/img/normal/about_1_1.jpg') }}" alt="About"></div>
                        <div class="img2"><img src="{{ asset('assets/img/normal/about_1_2.jpg') }}" alt="About"></div>
                        <div class="shape1"><img src="{{ asset('assets/img/normal/about_shape_1.svg') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6 pe-xl-4">
                    <div class="title-area mb-35"><span class="sub-title">About Us <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">Taghazout Or Tamraght ? Who Cares</h2>
                    </div>
                    <p class="mt-n2 mb-35">Experience the best of both Agadir with our rental apartment in Taghazout or Tamraght – because here, it doesn't matter which coastal gem you choose. Embrace the laid-back vibes of Tamraght or the vibrant hustle of Taghazout , all from the comfort of your cozy abode. Whether you're a surfer chasing the perfect wave or a traveler seeking tranquility, our accommodation is your gateway to the beauty of both Taghazout and Tamraght. Your adventure begins here, where choices become possibilities and memories are made effortlessly</p>
                    <div
                        class="about-media-wrap">
                        <div class="about-media" style="    width: 100%;max-width: none;">
                            <div class="about-media_icon"><img src="{{ asset('assets/img/icon/about_media_1.svg') }}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="about-media_title box-title">22 Years Experience</h3>
                                <p class="about-media_text">we guarantee a legacy of excellence in every moment you spend.</p>
                            </div>
                        </div>
                  {{--       <div class="about-media">
                            <div class="about-media_icon"><img src="{{ asset('assets/img/icon/about_media_2.svg') }}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="about-media_title box-title">Best Travel Agents</h3>
                                <p class="about-media_text">Uncover exclusive offers and activities for an unforgettable experience with us.</p>
                            </div>
                        </div> --}}
                </div>
                <div class="">

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
    <div class="overflow-hidden bg-smoke space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xxl-5 text-center text-xl-start">
                    <div class="title-area mb-35"><span class="sub-title justify-content-center justify-content-xl-start"><span class="shape left d-inline-block d-xl-none"><span class="dots"></span></span> Salty Waves Bored ? <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">The Perfect Place For You & Your Family</h2>
                    </div>
                    <p class="mt-n2 mb-40">Progressively impact multidisciplinary leadership skills via e-business leadership skills. Holisticly repurpose multifunctional data before turnkey information. Globally restore client-focused potentialities before scalable core competencies.</p>
                    {{-- <div
                        class="skill-feature">
                        <h3 class="skill-feature_title">Relaxing And Enjoying</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%;">
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                </div>
                <div class="skill-feature">
                    <h3 class="skill-feature_title">Activities</h3>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;">
                            <div class="progress-value">100%</div>
                        </div>
                    </div>
                </div>
                 <div class="skill-feature">
                    <h3 class="skill-feature_title">Destinations Around</h3>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;">
                            <div class="progress-value">100%</div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-xl-6 mt-40 mt-xl-0">
                <div class="img-box2">
                    <div class="img1"><img src="{{ asset('assets/img/normal/about_2_1.png') }}" alt="About"></div>
                    <div class="ot-video" data-overlay="title" data-opacity="2"><img src="{{ asset('assets/img/normal/about_2_2.jpg') }}" alt="Video"> <a href="https://www.veed.io/embed/4941c311-1a0c-4015-9d6b-b454bc351e12" class="play-btn popup-video"><i class="fas fa-play"></i></a></div>
                    <div class="shape1"><img src="{{ asset('assets/img/normal/about_shape_2.svg') }}" alt="shape"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-dark2 py-5">
        <div class="container py-4">
            <div class="row gx-0 justify-content-between">
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_1.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">117,325</span>+</h2>
                            <p class="counter-card_text text-white">Our Explorers</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">172</span>+</h2>
                            <p class="counter-card_text text-white">Destinations</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_3.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">12,542</span>+</h2>
                            <p class="counter-card_text text-white">More Trips</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_4.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">12</span>+</h2>
                            <p class="counter-card_text text-white">Accommodations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Travel Image <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Image Gallery</h2>
            </div>
            <div class="row gy-30 masonary-active">
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img style="width:420ppx; height:320px" src="{{ asset('assets/img/gallery/gallery_1_1.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/gallery_1_2.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_2.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/gallery_1_3.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_3.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/gallery_1_4.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_4.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/gallery_1_5.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_5.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-auto filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/gallery_1_6.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_6.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.other.video-says')

   @include('layout.footer')

</body>

</html>
