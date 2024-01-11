<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Your Ultimate Retreat for Accommodation, Surf, and Yoga Packages</title>
    <meta name="description" content="Discover the perfect blend of relaxation and adventure at Salty Waves. Immerse yourself in the coastal charm of our accommodations and dive into thrilling surf and rejuvenating yoga packages. Our camp is a haven for those seeking a harmonious balance between waves, wellness, and the serenity of coastal living. Book your stay with us and embark on a journey of unforgettable experiences.">
    <meta property="og:title" content="Salty Waves - Your Ultimate Retreat for Accommodation, Surf, and Yoga Packages">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">
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

    </div>
    <div class="overflow-hidden bg-smoke space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xxl-5 text-center text-xl-start">
                    <div class="title-area mb-35"><span class="sub-title justify-content-center justify-content-xl-start"><span class="shape left d-inline-block d-xl-none"><span class="dots"></span></span> Salty Waves Bored ? <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">The Perfect Place For You & Your Family</h2>
                    </div>
                    <p class="mt-n2 mb-40 text-justify">
                        Welcome to Salty Waves - your gateway to the perfect coastal retreat in Taghazout and Tamraght! Experience with us the charm and captivating beauty of these idyllic and popular Moroccan villages.
                        <br><br>In Tamraght we invite you to stay in our beautiful surf-camp, where we take pride in providing not just accommodation, but a lifestyle. It's a vibrant hub for surfers and like-minded travelers seeking an immersive experience on the waves and a lively community atmosphere. Whether you're a seasoned surfer or a beginner eager to catch your first wave, our surf camp is the perfect basecamp for surf enthusiasts of all levels. that's not all, at our surf camp, we also offer invigorating yoga activities to complement your surfing experience.
                        <br><br>check out our Surf packages for more information and feel free to contact us, if you have any questions.
                        </p>
                    <a href=" {{ route('packages', ['lang' => $lang]) }}" class="ot-btn booknow-btn">Book Your Package</a>

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
    <div class="space ">
        <div class="container" style="margin-bottom: 5rem">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="{{ asset('assets/img/normal/about_1_1.jpg') }}" alt="About"></div>
                        <div class="img2"><img src="{{ asset('assets/img/normal/about_1_2.jpg') }}" alt="About"></div>
                        <div class="shape1"><img src="{{ asset('assets/img/normal/about_shape_1.svg') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6 pe-xl-4">
                    <div class="title-area mb-35"><span class="sub-title">About Taghazout Waves <span class="shape right"><span class="dots"></span></span>
                        </span>
                        <h2 class="sec-title">The Perfect Place For You & Your Family</h2>
                    </div>
                    <p class="mt-n2 mb-35 text-justify">In Taghazout we offer you a selection of the finest accommodations, ensuring that your stay in this beautiful village will be nothing but extraordinary. Whether you're seeking a charming riad nestled in the heart of Taghazout or a beautiful beach-apartment allowing you to waking up to the soothing sounds of the ocean, we have the perfect accommodation to make you experience the best of Taghazout. If you´re looking for more than just a place to sleep, we also offer you a range of activities like surfing, sandboarding or day trips to popular places nearby like Paradise Valley, Imsouane and many more. You can simply contact us and tell us which activities you are interested in. We will then immediately get back to you for more details. </p>
                    <div
                        class="about-media-wrap">
                        <div class="about-media" style="    width: 100%;max-width: none;">
                            <div class="about-media_icon"><img src="{{ asset('assets/img/icon/about_media_1.svg') }}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="about-media_title box-title">22 Years Experience</h3>
                                <p class="about-media_text">We guarantee a legacy of excellence in every moment you spend.</p>
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
                        <p class="mb-0"><span class="text-theme fs-md fw-bold">2800+</span> Happy Customer</p>
                        <a href=" {{ route('accommodations', ['lang' => $lang]) }}" class="ot-btn booknow-btn">Book Your Stay</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark2 py-5">
        <div class="container py-4">
            <div class="row gx-0 justify-content-between">
                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_1.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">2800</span>+</h2>
                            <p class="counter-card_text text-white">Our Explorers</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_2.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">22</span>+</h2>
                            <p class="counter-card_text text-white">Years of Experiences</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-4 counter-card-wrap">
                    <div class="counter-card style2">
                        <div class="counter-card_icon"><img src="{{ asset('assets/img/icon/counter_1_4.svg') }}" alt="icon"></div>
                        <div class="media-body">
                            <h2 class="counter-card_number text-white"><span class="counter-number">4</span>+</h2>
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
                <h2 class="sec-title">Salty Waves Vibes Gallery</h2>
            </div>
            <div class="row gy-30 masonary-active">
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img  src="{{ asset('assets/img/accommodations/apartement n6/1.jpg') }}" alt="gallery image">
                             <a href="{{ asset('assets/img/accommodations/apartement n6/1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img  src="{{ asset('assets/img/accommodations/tamraght-hostle/0001.jpg') }}" alt="gallery image"> <a   href="{{ asset('assets/img/accommodations/tamraght-hostle/0001.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/0002.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/tamraght-hostle/0002.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/0003.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/tamraght-hostle/0003.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/surf/IMG_0978.jpg') }}"
                                alt="gallery image"> <a
                                href="{{ asset('assets/img/surf/IMG_0978.jpg') }}"
                                class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/yoga/yoga-0001.jpg') }}"
                                alt="gallery image"> <a
                                href="{{ asset('assets/img/yoga/yoga-0001.jpg') }}"
                                class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img
                                src="{{ asset('assets/img/yassin/BoobkerEditedJpg/2.jpg') }}"
                                alt="gallery image"> <a
                                href="{{ asset('assets/img/yassin/BoobkerEditedJpg/2.jpg') }}"
                                class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/yoga/yoga-0002.jpg') }}"
                                alt="gallery image"> <a
                                href="{{ asset('assets/img/yoga/yoga-0002.jpg') }}"
                                class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>

                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img  src="{{ asset('assets/img/accommodations/Taghazout/main-1.jpg') }}" alt="gallery image"> <a   href="{{ asset('assets/img/accommodations/Taghazout/main-1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/Taghazout/main-7.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/Taghazout/main-7.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/Taghazout/main-16.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/Taghazout/main-16.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                    </div>
                </div>
               {{--  <div class="col-md-6 col-xxl-auto filter-item">
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
                </div> --}}
            </div>
        </div>
    </div>

    @include('layout.other.video-says')

   @include('layout.footer')

</body>

</html>
