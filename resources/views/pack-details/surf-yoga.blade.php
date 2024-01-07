<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - SURF & YOGA</title>
    @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Premuim SURF & YOGA Package</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li><a href="{{ route('packages', ['lang' => $lang]) }}">Packages</a></li>
                    <li>Premuim SURF & YOGA Package</li>
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
                                <div class="about-card__box ">
                                    <div div class="about-card__top">
                                        <div>
                                            <h2 class="about-card__title">PREMUIM 7 NIGHTS SURF & YOGA PACKAGE</h2>
                                            <p class="badge-btn premuim">Premuim</p>
                                        </div>
                                    </div>
                                    <h4 class="about-card__subtitle">PACK Description</h4>
                                    <p class="mb-30 text-justify">Discover the ultimate surf and yoga escape with our 7
                                        Nights Surf & Yoga Package. For just
                                        €{{ config('global.standardPremuimPrice') }}, solo surfers get 7 nights in
                                        shared accommodation, daily meals, 6 surf lessons, and equipment rental.
                                        <br><br>
                                        If you're with a friend, the package for two people is from
                                        €{{ config('global.buddiesyogaPrice') }}, including a double room for 7 nights.
                                        Dive into local culture at Agadir's market, try sandboarding, and unwind with a
                                        spa Hammam.
                                        <br><br>
                                        Add convenience with airport transfers at €20 per person or bus station
                                        transfers at €15 per person. Customize your stay with extra yoga classes for €10
                                        each.
                                        <br>
                                        Book now for a week of surf, yoga, and relaxation on your terms.
                                    </p>
                                    <p style="font-size: 2rem">7 NIGHTS SURF & YOGA - from <strong
                                            style="color:#015292">€{{ config('global.standardPremuimPrice') }}.00/7Days</strong>
                                    </p>
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
                                            <p class="about-info"><strong>6 x Surf lessons, surf equipment rental (board
                                                    + wetsuit)</strong></p>
                                        </div>
                                        <div class="align-items-center " style="display: flex;margin-top:10px;">
                                            <p class="about-info"> <i class="fa-regular fa-plane"></i></p>
                                            <p class="about-info"><strong>Airport transfers from/to Agadir</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>7 x Yoga Classes (One Daily Session)</strong>
                                            </p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Surf spot transport</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Visit to Agadir market (Souk)</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Sandboarding in the Sand dunes</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Spa Hammam</strong></p>
                                        </div>
                                        <div class="align-items-center" style="display: flex">
                                            <p class="about-info"> <i class="fa-light fa-check"></i></p>
                                            <p class="about-info"><strong>Day trip to Paradise Valley</strong></p>
                                        </div>
                                        <div class="booknow" style="margin-top:5rem;justify-content:start;">
                                            <a href="{{ asset('assets/img/surfnstays/surfnyoga.jpg') }}" download
                                                class="ot-btn booknow-btn" style="width:auto;">Download INFOGRAPHIC</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6" id="booking-form">
                                <aside class="sidebar-area">
                                    <div class="widget widget_book">
                                        <div class="widget-tour-book">
                                            <div class="top">
                                                <h4 class="title">Book This Pachages</h4>
                                                <p class="price">€95.00 per Night</p>
                                            </div>
                                            <form id="bookingForm"
                                                action="{{ route('bookingPost', ['lang' => $lang]) }}" method="POST"
                                                class="widget-form">
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
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Your Name"
                                                        value="{{ old('name') }}">
                                                    <i class="fal fa-user"></i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Your Email"
                                                        value="{{ old('email') }}">
                                                    <i class="fal fa-envelope"></i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="phone"
                                                        id="phone" placeholder="Phone Number"
                                                        value="{{ old('phone') }}">
                                                    <i class="fal fa-phone"></i>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="country"
                                                        id="country" placeholder="Country"
                                                        value="{{ old('country') }}">
                                                    <i class="fa-light fa-globe"></i>
                                                </div>

                                                <input type="text" name="accommodation" hidden
                                                    value="Hostle Tamraght">




                                                <div>
                                                    <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">
                                                        Feel free to explore our activity packages at this link <a
                                                            href="{{ route('packages', ['lang' => $lang]) }}">Link</a>
                                                    </p>

                                                    <div class="form-group">
                                                        <select name="pack" disabled="disabled" id="pack"
                                                            class="form-select nice-select">
                                                            <option value="" selected="selected" hidden>Package
                                                                : Premuim Surf & Yoga Pack</option>

                                                        </select>
                                                        <i class="fal fa-chevron-down"></i>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="form-group col-6 soloyoga ">
                                                        <select name="soloyoga" id="soloyoga"
                                                            class="form-select nice-select ">
                                                            <option value="" disabled="disabled"
                                                                selected="selected" hidden>Surf Solo</option>
                                                            <option value="1 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 1 }}"
                                                                {{ old('soloyoga') == '1 Surf Solo' ? 'selected' : '' }}>
                                                                1 Surf Solo</option>
                                                            <option value="2 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 2 }}"
                                                                {{ old('soloyoga') == '2 Surf Solo' ? 'selected' : '' }}>
                                                                2 Surf Solo</option>
                                                            <option value="3 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 3 }}"
                                                                {{ old('soloyoga') == '3 Surf Solo' ? 'selected' : '' }}>
                                                                3 Surf Solo</option>
                                                            <option value="4 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 4 }}"
                                                                {{ old('soloyoga') == '4 Surf Solo' ? 'selected' : '' }}>
                                                                4 Surf Solo</option>
                                                            <option value="5 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 5 }}"
                                                                {{ old('soloyoga') == '5 Surf Solo' ? 'selected' : '' }}>
                                                                5 Surf Solo</option>
                                                            <option value="6 Surf Solo"
                                                                data-Solo="{{ config('global.soloyogaNightPrice') * 6 }}"
                                                                {{ old('soloyoga') == '6 Surf Solo' ? 'selected' : '' }}>
                                                                6 Surf Solo</option>
                                                            <option value="0 Surf Solo" data-Solo="0"
                                                                {{ old('soloyoga') == '0 Surf Solo' ? 'selected' : '' }}>
                                                                0 Surf Solo</option>
                                                        </select>
                                                        <i class="fal fa-chevron-down"></i>
                                                    </div>
                                                    <div class="form-group col-6 buddiesyoga ">
                                                        <select name="buddiesyoga" id="buddiesyoga"
                                                            class="form-select nice-select">
                                                            <option value="" disabled="disabled"
                                                                selected="selected" hidden>Surf Buddies</option>
                                                            <option value="1 Surf Buddies"
                                                                data-buddies="{{ config('global.buddiesyogaNightPrice') * 1 }}"
                                                                {{ old('buddiesyoga') == '1 Surf Buddies' ? 'selected' : '' }}>
                                                                1 Surf Buddies</option>
                                                            <option value="2 Surf Buddies"
                                                                data-buddies="{{ config('global.buddiesyogaNightPrice') * 2 }}"
                                                                {{ old('buddiesyoga') == '2 Surf Buddies' ? 'selected' : '' }}>
                                                                2 Surf Buddies</option>
                                                            <option value="3 Surf Buddies"
                                                                data-buddies="{{ config('global.buddiesyogaNightPrice') * 3 }}"
                                                                {{ old('buddiesyoga') == '3 Surf Buddies' ? 'selected' : '' }}>
                                                                3 Surf Buddies</option>
                                                            <option value="0 Surf Buddies" data-buddies="0"
                                                                {{ old('buddiesyoga') == '0 Surf Buddies' ? 'selected' : '' }}>
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
                                                    <input type="date" class="form-control" name="checkin"
                                                        id="checkin" placeholder="Checkin"
                                                        value="{{ old('checkin') }}">
                                                    {{-- <i class="fal fa-calendar-alt"></i> --}}
                                                    <i class="fa-light fa-plane-departure"></i>
                                                </div>

                                                {{-- <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">Checkout Date</p> --}}
                                                <div class="form-group">
                                                    <input type="date" class="form-control" name="checkout"
                                                        id="checkout" placeholder="Checkout"
                                                        value="{{ old('Checkout') }}">
                                                    {{-- <i class="fal fa-calendar-alt"></i> --}}
                                                    <i class="fa-light fa-plane-arrival"></i>
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                                        placeholder="Your Message">{{ old('message') }}</textarea>
                                                    <i class="fal fa-pencil"></i>
                                                </div>

                                                <div class="form-group text-end">
                                                    <p>Total : <strong
                                                            id="total">€{{ old('total', '0.00') }}</strong></p>
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

                                            $('#checkout').change(function () {
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
                    <div class="tour-details" style="margin-bottom:35px;">
                        <div class="title-area text-center"><span class="sub-title justify-content-center"><span
                                    class="shape left"><span class="dots"></span></span> Package Details <span
                                    class="shape right"><span class="dots"></span></span>
                            </span>
                            {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                        </div>
                        <div class="description-table-wrap pb-0 mb-0">
                            <table class="description-table  pb-0 mb-0">
                                <tbody>
                                    <tr>
                                        <th>Surf Packages</th>
                                        <td>Salty Waves Taghazout >> Surf Apartment N4 Taghazout</td>
                                    </tr>
                                    <tr>
                                        <th>Apartement </th>
                                        <td>5 Guests, 1 Bedroom, 3 Beds, 1 Bathrooms <strong>(€50.00/day)</strong></td>
                                    </tr>

                                    <tr>
                                        <th>Airbnb's Rate</th>
                                        <td>5 out of 5</td>
                                    </tr>
                                    <tr>
                                        <th>Included</th>
                                        <td>
                                            <span><i class="fal fa-check"></i> Beach view</span>
                                            <br><span><i class="fal fa-check"></i> Washer</span>
                                            <br><span><i class="fal fa-check"></i> Children’s books and toys</span>
                                            <br><span><i class="fal fa-check"></i> Board games</span>
                                            <br><span><i class="fal fa-check"></i> Beach access</span>
                                            <br>...

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Excluded</th>
                                        <td><span><i class="fal fa-xmark"></i> Security cameras on property</span>
                                            <br><span><i class="fal fa-xmark"></i> Hair dryer</span>
                                            <br><span><i class="fal fa-xmark"></i> Essentials</span>
                                            <br><span><i class="fal fa-xmark"></i> Smoke alarm</span>
                                            <br><span><i class="fal fa-xmark"></i> Pets</span>

                                            <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="space">
                        <div class="title-area text-center"><span class="sub-title justify-content-center"><span
                                    class="shape left"><span class="dots"></span></span> Feel The Vibe <span
                                    class="shape right"><span class="dots"></span></span>
                            </span>
                            {{-- <h2 class="sec-title">Our Accommodations</h2> --}}
                        </div>
                        <div id="carouselExampleInterval1" class="carousel slide tour-img" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 10px">
                                <div class="carousel-item active" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_0978.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_1116.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_1041.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_1083.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_1150.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <img src="{{ asset('assets/img/surf/IMG_1120.jpg') }}" class="d-block w-100"
                                        alt="Dormitory Photos">
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
                                        <p class="text-justify">Our dorm rooms with ocean view are the perfect choice
                                            for groups of friends and solo travelers in a budget. A large room that will
                                            change your concept about dorm rooms, where you can have a good rest and
                                            recover all the energy spent during the surfing sessions.</p>
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

                                    <div class="booknow" style="margin-top:5rem ">
                                        <a href=" {{ route('hostel-tamraght', ['lang' => $lang]) }}"
                                            class="ot-btn booknow-btn">Book This Package</a>
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
