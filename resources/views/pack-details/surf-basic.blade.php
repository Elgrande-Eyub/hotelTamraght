<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves Basic Surf Coaching Package - Improve Your Skills</title>
    <meta name="description" content="Enhance your surfing skills with Salty Waves' Surf Coaching Package. Dive into personalized coaching sessions, master the waves with experienced instructors, and enjoy a comfortable stay in our coastal accommodations. Elevate your surf game and make the most of your surfing journey. Book your coaching package today!">
    <meta property="og:title" content="Salty Waves Basic Surf Coaching Package - Improve Your Skills">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">

    @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Basic SURF COACHING Package</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li><a href="{{ route('packages', ['lang' => $lang]) }}">Packages</a></li>
                    <li>Basic SURF COACHING Package</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tour-details">
                        <div class="tour-header">
                            <h2 class="tour-title " style="margin: 0">
                                <p style="margin: 0">7 NIGHTS Basic SURF COACHING PACKAGE <span
                                        style="color: #015292"> - €455</span></p>

                            </h2><br>
                            <div class="meta-box-wrap">
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fa-light fa-check"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Difficulty</h5>
                                        <p class="meta-box_text">All Levels</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fa-light fa-language"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Instruction</h5>
                                        <p class="meta-box_text">in English</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fa-light fa-turkey"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">All Meals</h5>
                                        <p class="meta-box_text">Included</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-users"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Group Size</h5>
                                        <p class="meta-box_text">12 People</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fa-light fa-plane"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Airport transfer</h5>
                                        <p class="meta-box_text">Included</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tour-img" style="margin-bottom:0">
                            <div id="carouselExampleInterval1" class="carousel slide tour-img" data-bs-ride="carousel">
                                <div class="carousel-inner" style="border-radius: 10px">
                                    <div class="carousel-item active" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-1.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-2.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-3.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-4.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-5.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3500">
                                        <img src="{{ asset('assets/img/packages/surfnyoga/surf-6.jpg') }}"
                                            class="d-block w-100 packages-carousel" alt="Dormitory Photos">
                                    </div>

                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <ul class="nav tour-tab" id="tourTab" role="tablist">

                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn active"
                                    id="description-tab" data-bs-toggle="tab" href="#tourDescription" role="tab"
                                    aria-controls="tourDescription" aria-selected="true">Description</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="www-tab"
                                    data-bs-toggle="tab" href="#www" role="tab" aria-controls="www"
                                    aria-selected="false">About</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="plan-tab"
                                    data-bs-toggle="tab" href="#plan" role="tab" aria-controls="plan"
                                    aria-selected="false">Program</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="about-tab"
                                    data-bs-toggle="tab" href="#about" role="tab" aria-controls="about"
                                    aria-selected="false">Included</a></li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="tourDescription" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="tour-description">


                                                <div class="description-table-wrap">
                                                    <p>Indulge in a week-long experience in Morocco's coastal paradise with our Surf and Stay Package.</p>
                                                    <table class="description-table">
                                                        <tbody>
                                                            <tr>
                                                                <th>Accommodation Options</th>
                                                                <td>Choose your haven—solo surfers' Dormitory Rooms for an unbeatable value of €455 for 7 nights, or elevate your stay to the luxurious Surf Buddies - Deluxe Rooms at €1010 for a week of indulgence and comfort.
                                                                    <br>
                                                                    <strong>Check-In Time: 14:00</strong> | <strong>Check-Out Time: 12:00</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Surfing Adventure</th>
                                                                <td>Immerse yourself in 6 thrilling surf lessons with expert instructors, gear up with board and wetsuit rentals, and explore top surf spots with included transfers.
                                                                    <br><strong>Skill Level : </strong> Beginner | Intermediate | Advanced
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Delicious Meals</th>
                                                                <td>Delight your taste buds with daily breakfast, lunch, and dinner featuring authentic Moroccan cuisine.
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <p>Book now and secure your spot today to embark on an unforgettable surfing journey along the captivating Moroccan coast!</p>
                                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h4 class="inner-title">Daily Retreat Schedule: A Day of Wellness and Adventure
                                    </h4>
                                    <div class="accordion" id="planAccordion">
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-1"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                    aria-expanded="false" aria-controls="collapse-1">08:00 -
                                                    09:00</button></div>
                                            <div id="collapse-1" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-1" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Arrive and settle in, taking in the peaceful surroundings and anticipating the exciting day ahead.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card active">
                                            <div class="accordion-header" id="collapse-item-2"><button
                                                    class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="true"
                                                    aria-controls="collapse-2">09:15 - 10:00</button></div>
                                            <div id="collapse-2" class="accordion-collapse collapse show"
                                                aria-labelledby="collapse-item-2" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Join us for a relaxed breakfast after a peaceful morning. Savor a nutritious meal that caters to various dietary preferences, preparing you for the exhilarating activities planned for the day.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-3"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                    aria-expanded="false" aria-controls="collapse-3">10:00 -
                                                    12:30</button></div>
                                            <div id="collapse-3" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-3" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Embark on an invigorating surfing session led
                                                        by our seasoned surf instructor. Receive personalized lessons
                                                        tailored to your skill level, ensuring both beginners and
                                                        experienced surfers can enjoy the waves. Dive into the thrill of
                                                        surfing, surrounded by the beauty of the ocean.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-4"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                    aria-expanded="false" aria-controls="collapse-4">12:30 -
                                                    13:00</button></div>
                                            <div id="collapse-4" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-4" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">As the midday sun warms the beach, indulge in a
                                                        delightful beachside lunch experience. Our culinary team has
                                                        crafted a menu featuring fresh, locally sourced ingredients that
                                                        capture the essence of coastal cuisine.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-5"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                    aria-expanded="false" aria-controls="collapse-5">13:00 -
                                                    16:00</button></div>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-5" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">After lunch, take advantage of leisure time.
                                                        Engage in beach games, relax under the sun, or choose to immerse
                                                        yourself in solo surfing practice in the water. This free time
                                                        allows you to personalize your experience and make the most of
                                                        the stunning coastal surroundings.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-7"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-7"
                                                    aria-expanded="false" aria-controls="collapse-7">20:30</button>
                                            </div>
                                            <div id="collapse-7" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-7" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Conclude your day with a delightful dinner.
                                                        Join us for a culinary journey that celebrates local flavors and
                                                        nourishes your body. Share stories and experiences with fellow
                                                        retreat participants, creating lasting memories in a relaxed and
                                                        inviting atmosphere.</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="tour-location">
                                    <div class="about-infos">
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>7 Nights Accommodation</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>7 x Breakfast, lunch and dinner</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>6 x Surf lessons, surf equipment rental
                                                    (board
                                                    + wetsuit)</strong></p>
                                        </div>
                                        <div class="align-items-center " style="display: flex;margin-top:10px;">
                                            <p class="about-info"> <i class="fa-regular fa-plane" style="background-color: #922801"></i></p>
                                            <p class="about-info"><strong>Airport transfers from/to Agadir (extra:€20/pp)</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i style="background-color: #922801"
                                                    class="fa-regular fa-xmark"></i></p>
                                            <p class="about-info"><strong>7 x Yoga Classes (One Daily Session) (extra:€10/class)</strong>
                                            </p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Surf spot transport</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i style="background-color: #922801"
                                                class="fa-regular fa-xmark"></i></p>
                                            <p class="about-info"><strong>Visit to Agadir market (Souk)</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i style="background-color: #922801"
                                                class="fa-regular fa-xmark"></i></p>
                                            <p class="about-info"><strong>Sandboarding in the Sand dunes</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i style="background-color: #922801"
                                                class="fa-regular fa-xmark"></i></p>
                                            <p class="about-info"><strong>Day trip to Paradise Valley</strong></p>
                                        </div>
                                        <div class="booknow" style="margin-top:5rem;justify-content:start;">
                                            <a href="{{ asset('assets/img/surfnstays/basicCoaching.jpg') }}" download
                                                class="ot-btn booknow-btn" style="width:auto;">Download
                                                INFOGRAPHIC</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="location" role="tabpanel"
                                aria-labelledby="location-tab">
                                <div class="tour-location">
                                    <iframe class="location"
                                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d412.7379685492819!2d-9.713078851828755!3d30.545702211478222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMyJzQ0LjQiTiA5wrA0Mic0Ny4xIlc!5e1!3m2!1sen!2sma!4v1702293757319!5m2!1sen!2sma"
                                        height="320px" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>



                                </div>
                            </div>
                            <div class="tab-pane fade" id="www" role="tabpanel" aria-labelledby="www-tab">
                                <div class="tour-location">
                                    <h4 class="inner-title">About this Package</h4>
                                    <p class="text-justify">
                                        Indulge in a week-long experience in Morocco's coastal paradise with our Surf and Meals Package. Choose your haven—solo surfers' Dormitory Rooms for an unbeatable value of €455 for 7 nights, or elevate your stay to the luxurious Surf Buddies - Deluxe Rooms at €1010 for a week of indulgence and comfort.
                                        <br>
                                        <strong>Check-In Time: 14:00</strong> | <strong>Check-Out Time: 12:00</strong>
                                        <br><br>
                                        Immerse yourself in 6 thrilling surf lessons with expert instructors, gear up with board and wetsuit rentals, and explore top surf spots with included transfers.
                                        <br><strong>Skill Level : </strong> Beginner | Intermediate | Advanced
                                        <br><br>
                                        Delight your taste buds with daily breakfast, lunch, and dinner featuring authentic Moroccan cuisine.
                                        <br><br>
                                        Enjoy worry-free travel with included airport and bus transfers, ensuring a smooth arrival and departure experience.
                                    </p>
                                    <p>Book now and secure your spot today to embark on an unforgettable surfing journey along the captivating Moroccan coast!</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5" id="booking-form">
                    <aside class="sidebar-area">
                        <div class="widget widget_book">
                            <div class="widget-tour-book">
                                <div class="top">
                                    <h4 class="title">Book This Package</h4>
                                    <p class="price">€65.00 per Night</p>
                                </div>
                                <form id="bookingForm" action="{{ route('bookingPost', ['lang' => $lang]) }}"
                                    method="POST" class="widget-form">
                                    @csrf
                                    <p>This place has a maximum of 12 guests, not including infants. Pets
                                        aren't allowed.</p>

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('error') }}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name" value="{{ old('name') }}">
                                        <i class="fal fa-user"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" value="{{ old('email') }}">
                                        <i class="fal fa-envelope"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                            placeholder="Phone Number" value="{{ old('phone') }}">
                                        <i class="fal fa-phone"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" id="country"
                                            placeholder="Country" value="{{ old('country') }}">
                                        <i class="fa-light fa-globe"></i>
                                    </div>

                                    <input type="text" name="accommodation" hidden value="Hostle Tamraght">




                                    <div>
                                        <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">
                                            Feel free to explore our activity packages at this link <a
                                                href="{{ route('packages', ['lang' => $lang]) }}">Link</a>
                                        </p>

                                        <div class="form-group">
                                            <select name="pack" disabled="disabled" id="pack"
                                                class="form-select nice-select">
                                                <option value="" selected="selected" hidden>Package
                                                    : Basic Surf Coaching Package</option>

                                            </select>
                                            <i class="fal fa-chevron-down"></i>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-6 soloyoga ">
                                            <select name="solobasic" id="soloyoga" class="form-select nice-select ">
                                                <option value="" disabled="disabled" selected="selected"
                                                    hidden>Surf Solo</option>
                                                <option value="1 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 1 }}"
                                                    {{ old('solobasic') == '1 Surf Solo' ? 'selected' : '' }}>
                                                    1 Surf Solo</option>
                                                <option value="2 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 2 }}"
                                                    {{ old('solobasic') == '2 Surf Solo' ? 'selected' : '' }}>
                                                    2 Surf Solo</option>
                                                <option value="3 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 3 }}"
                                                    {{ old('solobasic') == '3 Surf Solo' ? 'selected' : '' }}>
                                                    3 Surf Solo</option>
                                                <option value="4 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 4 }}"
                                                    {{ old('solobasic') == '4 Surf Solo' ? 'selected' : '' }}>
                                                    4 Surf Solo</option>
                                                <option value="5 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 5 }}"
                                                    {{ old('solobasic') == '5 Surf Solo' ? 'selected' : '' }}>
                                                    5 Surf Solo</option>
                                                <option value="6 Surf Solo"
                                                    data-Solo="{{ config('global.solobasiccoachingNightPrice') * 6 }}"
                                                    {{ old('solobasic') == '6 Surf Solo' ? 'selected' : '' }}>
                                                    6 Surf Solo</option>
                                                <option value="0 Surf Solo" data-Solo="0"
                                                    {{ old('solobasic') == '0 Surf Solo' ? 'selected' : '' }}>
                                                    0 Surf Solo</option>
                                            </select>
                                            <i class="fal fa-chevron-down"></i>
                                        </div>
                                        <div class="form-group col-6 buddiesyoga ">
                                            <select name="buddiesbasic" id="buddiesyoga"
                                                class="form-select nice-select">
                                                <option value="" disabled="disabled" selected="selected"
                                                    hidden>Surf Buddies</option>
                                                <option value="1 Surf Buddies"
                                                    data-buddies="{{ config('global.buddiesbasiccoachingNightPrice') * 1 }}"
                                                    {{ old('buddiesbasic') == '1 Surf Buddies' ? 'selected' : '' }}>
                                                    1 Surf Buddies</option>
                                                <option value="2 Surf Buddies"
                                                    data-buddies="{{ config('global.buddiesbasiccoachingNightPrice') * 2 }}"
                                                    {{ old('buddiesbasic') == '2 Surf Buddies' ? 'selected' : '' }}>
                                                    2 Surf Buddies</option>
                                                <option value="3 Surf Buddies"
                                                    data-buddies="{{ config('global.buddiesbasiccoachingNightPrice') * 3 }}"
                                                    {{ old('buddiesbasic') == '3 Surf Buddies' ? 'selected' : '' }}>
                                                    3 Surf Buddies</option>
                                                <option value="0 Surf Buddies" data-buddies="0"
                                                    {{ old('buddiesbasic') == '0 Surf Buddies' ? 'selected' : '' }}>
                                                    0 Surf Buddies</option>
                                            </select>
                                            <i class="fal fa-chevron-down"></i>
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ old('total') }}" name="total"
                                        id="totalInput">

                                    <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">
                                        Checkin-Checkout Date</p>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="checkin" id="checkin"
                                            placeholder="Checkin" value="{{ old('checkin') }}">
                                        {{-- <i class="fal fa-calendar-alt"></i> --}}
                                        <i class="fa-light fa-plane-departure"></i>
                                    </div>

                                    {{-- <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">Checkout Date</p> --}}
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="checkout" id="checkout"
                                            placeholder="Checkout" value="{{ old('Checkout') }}">
                                        {{-- <i class="fal fa-calendar-alt"></i> --}}
                                        <i class="fa-light fa-plane-arrival"></i>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                            placeholder="Your Message">{{ old('message') }}</textarea>
                                        <i class="fal fa-pencil"></i>
                                    </div>

                                    <div class="form-group text-end">
                                        <p>Total : <strong id="total">€{{ old('total', '0.00') }}</strong></p>
                                    </div>

                                    <div class="form-btn">
                                        <button class="ot-btn w-100" id="bookNowBtn">
                                            <i class="submit-spin"></i> Book now
                                        </button>
                                    </div>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>

                            </div>
                        </div>




                        <script>
                            $(document).ready(function() {



                                $('#bookNowBtn').click(function(event) {
                                    event.preventDefault();
                                    $('.submit-spin').addClass('fa fa-spinner fa-spin');

                                    setTimeout(function() {
                                        console.log('Form submitted!');
                                        $('#bookingForm').submit();

                                    }, 2000);
                                });

                                const checkINDate = new Date();
                                checkINDate.setDate(checkINDate.getDate() + 1);
                                document.getElementById('checkin').valueAsDate = checkINDate;
                                const checkoutDate = new Date();
                                checkoutDate.setDate(checkINDate.getDate() + 3);
                                document.getElementById('checkout').valueAsDate = checkoutDate;

                                $('#solocoaching, #buddiescoaching,#soloyoga, #buddiesyoga').change(function() {

                                    $('#total').text('€0.00');
                                    updateTotalCost();

                                });

                                function updateTotalCost() {
                                    var checkinDate = new Date($('#checkin').val());
                                    var checkoutDate = new Date($('#checkout').val());
                                    var soloyoga = parseFloat($('#soloyoga').find(':selected').data('solo')) || 0;
                                    var buddiesyoga = parseFloat($('#buddiesyoga').find(':selected').data('buddies')) || 0;

                                    var selectedPack = $('#pack').val();

                                    if (!isNaN(checkinDate.getTime()) && !isNaN(checkoutDate.getTime())) {
                                        var timeDifference = checkoutDate.getTime() - checkinDate.getTime();
                                        var nights = Math.ceil(timeDifference / (1000 * 3600 * 24));

                                        var totalCost = nights * (soloyoga + buddiesyoga);

                                        $('#total').text('€' + totalCost.toFixed(2));
                                        $('#totalInput').val(totalCost.toFixed(2));
                                    } else {
                                        $('#total').text('Invalid Dates');
                                        $('#totalInput').val('');
                                    }



                                }

                                $('#checkin').change(function() {

                                    const checkoutDate = new Date(document.getElementById('checkin').valueAsDate);
                                    checkoutDate.setDate(checkoutDate.getDate() + 3);
                                    document.getElementById('checkout').valueAsDate = checkoutDate;
                                    updateTotalCost();

                                });

                                $('#checkout').change(function() {
                                    $('#total').text('€0.00');
                                    const checkinDate = new Date(document.getElementById('checkin').valueAsDate);

                                    // Calculate the minimum checkout date (3 days later)
                                    const minCheckoutDate = new Date(checkinDate);
                                    minCheckoutDate.setDate(minCheckoutDate.getDate() + 3);

                                    // Get the current checkout date
                                    const checkoutDateInput = document.getElementById('checkout');
                                    const currentCheckoutDate = new Date(checkoutDateInput.valueAsDate);

                                    // Check if the current checkout date is less than the minimum required checkout date
                                    if (currentCheckoutDate < minCheckoutDate) {
                                        // Display an error message or take appropriate action
                                        alert('Minimum stay is 3 days. Please choose a later checkout date.');

                                        // You may choose to reset the checkout date to the minimum required date
                                        checkoutDateInput.valueAsDate = minCheckoutDate;
                                    }

                                    // Update total cost or perform other actions
                                    updateTotalCost();
                                });





                            });
                        </script>




                        <style>
                            input[type="date"]::-webkit-calendar-picker-indicator {
                                display: none;
                            }

                            input[type="date"]::-webkit-inner-spin-button,
                            input[type="date"]::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }

                            input[type="date"] {
                                -webkit-appearance: none;
                                appearance: none;
                            }
                        </style>




                    </aside>
                </div>
            </div>
        </div>
    </section>
    <section class="ot-tour-wrapper space-top space-extra-bottom" style="padding:0">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="tour-details">
                        <div class="tour-header  ">
                            {{-- <h1 class="tour-title text-center m-0">Choose Your Accommodations</h1> --}}
                            <div class="container">
                                <div class="title-area text-center"><span
                                        class="sub-title justify-content-center"><span class="shape left"><span
                                                class="dots"></span></span> Package Rooms Available <span
                                            class="shape right"><span class="dots"></span></span>
                                    </span>
                                    {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                                </div>
                                <div class="row gy-30 text-center" style="display:flex;justify-content: center">
                                    <div class="col-xl-5 col-lg-4 col-md-6">
                                        <h3>Solo Surfer - Dormitory Rooms</h3>

                                        <p class="text-justify"> Experience cozy comfort in our double dorm rooms,
                                            ideal for groups of friends and solo travelers.
                                            Thoughtfully designed and adorned, these spaces provide a private retreat.
                                            Enjoy with Wi-Fi access </p>
                                        <div id="carouselExampleInterval" class="carousel slide tour-img"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                    <img src="{{ asset('assets/img/accommodations/packs/dor-1.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <img src="{{ asset('assets/img/accommodations/packs/dor-2.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <img src="{{ asset('assets/img/accommodations/packs/dor-3.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <img src="{{ asset('assets/img/accommodations/packs/dor-4.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-6 ">
                                        <h3>Surf Buddies - Deluxe Rooms</h3>
                                        <p class="text-justify">Our double rooms are the perfect choice for couples or
                                            solo traveleres that want some extra privacy and comfort. They are all
                                            decorated and designed with lots of love and have Wi-Fi access.</p>

                                        <div id="carouselExampleInterval1" class="carousel slide tour-img"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-1.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-2.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-3.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-4.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-5.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3500">
                                                    <img src="{{ asset('assets/img/accommodations/packs/deluxe-6.jpg') }}"
                                                        class="d-block w-100" alt="Dormitory Photos">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="tour-header  ">
                            {{-- <h1 class="tour-title text-center m-0">Choose Your Accommodations</h1> --}}
                            <div class="container">
                                <div class="title-area text-center"><span
                                        class="sub-title justify-content-center"><span class="shape left"><span
                                                class="dots"></span></span> Other Packages <span
                                            class="shape right"><span class="dots"></span></span>
                                    </span>
                                    {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                                </div>
                                <div class="row gy-30 text-center" style="display:flex;justify-content: center">
                                    <div class="row d-flex justify-center">
                                        {{--    <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                                            @include('layout.packages.surfnstay')

                                        </div> --}}
                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">

                                            @include('layout.packages.surfnstay')

                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">

                                            @include('layout.packages.surfcoaching')

                                        </div>
                                        {{--   <div class="col-xl-4 col-lg-6 col-md-6 mb-30">



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
        <iframe class="location"
            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d429.6588803933894!2d-9.679411!3d30.513374!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMwJzQ4LjEiTiA5wrA0MCc0NS43Ilc!5e0!3m2!1sen!2sma!4v1702371064141!5m2!1sen!2sma"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    @include('layout.footer')
</body>

</html>
