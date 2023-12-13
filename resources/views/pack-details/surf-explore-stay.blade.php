<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Apartment N4</title>
    @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Surf Explore N' Stays Pack</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li><a href="{{ route('packages', ['lang' => $lang]) }}">Packages</a></li>
                    <li>Surf Explore N' Stays Pack</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">

                    <div class="about-card mb-5">
                        <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="about-card__img">
                                <img class="w-100" src="{{ asset('assets/img/surfnstays/5surfnstays.jpg') }}" alt="team image">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-card__box ">
                                <div class="about-card__top">
                                    <div><h2 class="about-card__title">Surf Explore N' Stays Level 3</h2>
                                    </div>
                                </div>
                                <h4 class="about-card__subtitle">PACK Provide</h4>
                                <p class="mb-30">
                                    Our qualified surf guides know the area and culture ‘like the back of their hand’ so they can transport get you to the best waves every day. Experience cruising along the Moroccan coastline with the music playing, the sun shining and the swell pumping. Maybe you’ll drive past a herd of camels or a bunch of goats climbing trees. Experience one of the most surprising and vibrant cultures this planet has to offer on a surf adventure with us!
                                    This offer can be booked for stays of 5 nights or more.</p>
                                    <p style="font-size: 2rem">Surf Explore N' Stays Level 3 - <strong style="color:#015292">€540.00/7Days</strong></p>
                                <div class="about-infos">
                                    <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>Shuttles from and to the airport/ Bus station</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>A Dinner out (guest's expenses, optional)</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>Accommodation in dormitory rooms</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>Surf equipments provided</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>6 Daily meals provided (breakfast of champions, packed surfer lunch, healthy dinner)</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>2 Surf sessions in the convenient spot</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>1 Trip to Paradise Valley authentic experience</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>1 Trip to Tamri Desert (Sand boarding and sunset tea break)</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>1 Surf session in Imsouane</strong></p>
                                       </div>
                                       <div style="display: flex">
                                        <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                        <p class="about-info"><strong>Transportation to and from the surf spots</strong></p>
                                       </div>
                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <div class="tour-details">
                        <div class="tour-header  ">
                            {{-- <h1 class="tour-title text-center m-0">Choose Your Accommodations</h1> --}}
                            <div class="container">
                                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Choose your Accommodations <span class="shape right"><span class="dots"></span></span>
                                    </span>
                                    {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                                </div>
                                <div class="row gy-30 text-center" style="display:flex;justify-content: center">
                                    <div class="col-xl-5 col-lg-4 col-md-6">
                                        <h1>Dormitory Rooms</h1>
                                        <p class="text-justify">Our dorm room with is the perfect choice for groups of friends and solo travelers in a budget. A large room that will change your concept about dorm rooms, where you can have a good rest and recover all the energy spent during the surfing sessions.</p>
                                        <div id="carouselExampleInterval" class="carousel slide tour-img" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="{{ asset('assets/img/accommodations/packs/dor-1.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3000">
                                                <img src="{{ asset('assets/img/accommodations/packs/dor-2.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3000">
                                                <img src="{{ asset('assets/img/accommodations/packs/dor-3.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3000">
                                                <img src="{{ asset('assets/img/accommodations/packs/dor-4.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-6 ">
                                        <h1>Deluxe Rooms</h1>
                                        <p class="text-justify">Our double rooms are the perfect choice for couples or solo traveleres that want an extra of privacy and comfort staying in a private room, decorated and designed with love by our interior will inspire your dreams, has air conditioning and Wi-Fi access.</p>

                                        <div id="carouselExampleInterval1" class="carousel slide tour-img" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-1.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-2.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-3.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-4.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-5.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                              <div class="carousel-item" data-bs-interval="3500">
                                                <img src="{{ asset('assets/img/accommodations/packs/deluxe-6.jpg') }}" class="d-block w-100" alt="Dormitory Photos">
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>

                                    </div>

                                    <div class="booknow" style="margin-top:5rem ">
                                        <a href=" {{ route('hostel-tamraght', ['lang' => $lang]) }}" class="ot-btn booknow-btn" >Book This Package</a>
                                       </div>

                                </div>
                            </div>
                        </div>

                        <div class="tour-header  ">
                            {{-- <h1 class="tour-title text-center m-0">Choose Your Accommodations</h1> --}}
                            <div class="container">
                                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Other Packages <span class="shape right"><span class="dots"></span></span>
                                    </span>
                                    {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                                </div>
                                <div class="row gy-30 text-center" style="display:flex;justify-content: center">
                                    <div class="row d-flex justify-center">
                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                                            @include('layout.packages.surfnstay')

                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">



                                            @include('layout.packages.surfnstayplus')

                                        </div>
                                         {{-- <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                                            @include('layout.packages.surfnstayexplore')
                                        </div> --}}

                                    </div>



                                </div>
                            </div>
                        </div>


        </div>
        </div>

        </div>




        </div>
    </section>

    @include('layout.other.video-says')

    <div class=" mb-5">
        <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d429.6588803933894!2d-9.679411!3d30.513374!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMwJzQ4LjEiTiA5wrA0MCc0NS43Ilc!5e0!3m2!1sen!2sma!4v1702371064141!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    @include('layout.footer')
</body>

</html>
