<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Hostel in Tamraght</title>
    <meta name="description" content="Discover a vibrant and budget-friendly stay at Salty Waves Hostel in Tamraght. Our cozy hostel offers a lively atmosphere, comfortable accommodations, and a perfect base for exploring Tamraght's surf scene. Immerse yourself in the camaraderie of fellow travelers and experience the essence of Tamraght. Book your stay at Salty Waves Hostel today!">
    <meta property="og:title" content="Salty Waves - Hostel in Tamraght">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">

    @include('layout.head')
</head>
<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bgT.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" >Hostel Tamraght</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li><a href="{{ route('accommodations', ['lang' => $lang]) }}">Accommodations</a></li>
                    <li>Hostel Tamraght - Salty Waves</li>
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
                            <h2 class="tour-title" style="margin: 0">Hostel Tamraght - Salty Waves</h2>
                            <p>3 Rooms with 2 Beds each <strong>(35€/each)</strong> , Dormitory with 6 Beds <strong>({{ config('global.hostelTamraght') }}€/each)</strong></p>
                            <div class="meta-box-wrap">
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-circle-dollar"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">From</h5>
                                        <p class="meta-box_text">€{{ config('global.hostelTamraght') }}.00</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-clock"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Duration</h5>
                                        <p class="meta-box_text">1 Day</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-location-dot"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Location</h5>
                                        <p class="meta-box_text">Tamraght</p>
                                    </div>
                                </div>
                                <div class="meta-box">
                                    <div class="meta-box_icon"><i class="fal fa-users"></i></div>
                                    <div class="media-body">
                                        <h5 class="meta-box_title">Group Size</h5>
                                        <p class="meta-box_text">12 People</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tour-img">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="3000">
                                    <img src="{{ asset('assets/img/accommodations/tamraght-hostle/main.jpg') }}" class="d-block w-100" alt="Surf Riad Photos">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('assets/img/accommodations/tamraght-hostle/main-1.jpg') }}" class="d-block w-100" alt="Surf Riad Photos">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('assets/img/accommodations/tamraght-hostle/main-2.jpg') }}" class="d-block w-100" alt="Surf Riad Photos">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('assets/img/accommodations/tamraght-hostle/main-3.jpg') }}" class="d-block w-100" alt="Surf Riad Photos">
                                  </div>
                                  <div class="carousel-item" data-bs-interval="3000">
                                    <img src="{{ asset('assets/img/accommodations/tamraght-hostle/main-4.jpg') }}" class="d-block w-100" alt="Surf Riad Photos">
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
                        <ul class="nav tour-tab" id="tourTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn active" id="description-tab" data-bs-toggle="tab" href="#tourDescription" role="tab" aria-controls="tourDescription" aria-selected="true">Information</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">about</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="photos-tab" data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="location-tab" data-bs-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Location</a></li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="tourDescription" role="tabpanel" aria-labelledby="description-tab">
                                <div class="tour-description">


                                    <div class="description-table-wrap">
                                        <table class="description-table">
                                            <tbody>
                                                <tr>
                                                    <th>Destination</th>
                                                    <td>Salty Waves Taghazout >> Hostel Tamraght - Salty Waves</td>
                                                </tr>
                                                <tr>
                                                    <th>Hostel Contain</th>
                                                    <td>3 Rooms with 2 Beds each <strong>(35€/each)</strong> , Dormitory with 6 Beds <strong>({{ config('global.hostelTamraght') }}€/each)</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Breakfast</th>
                                                    <td>Included</td>
                                                </tr>
                                                <tr>
                                                    <th>Airbnb's Rate</th>
                                                    <td>5 out of 5</td>
                                                </tr>
                                                <tr>
                                                    <th>Included</th>
                                                    <td>
                                                        <span><i class="fal fa-check"></i> Beach view</span>
                                                        <br><span><i class="fal fa-check"></i> Security cameras on property</span>
                                                        <br><span><i class="fal fa-check"></i> Hair dryer</span>
                                                        <br><span><i class="fal fa-check"></i> Washer</span>
                                                        <br><span><i class="fal fa-check"></i> Towels</span>
                                                        <br><span><i class="fal fa-check"></i> Bed Linen</span>
                                                        <br><span><i class="fal fa-check"></i> Fully Equipped Kitchen</span>
                                                        <br><span><i class="fal fa-check"></i> TV</span>
                                                        <br>
                                                        <!-- Button trigger modal -->
                                                        <button class="btn-ShowMore" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                            Show More
                                                        </button>

                                                        <!-- Modal -->
                                                        @include('acco-details.includedAllowed')

                                                        </td>
                                                </tr>
                                                <tr>
                                                    <th>Excluded</th>
                                                    <td>
                                                        <br><span><i class="fal fa-xmark"></i> Pets Are Not Allowed</span>

                                                        <br></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h3 class="inner-title">Tour Plan</h3>
                                    <div class="accordion" id="planAccordion">
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-1"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">Day 01: Departure</button></div>
                                            <div id="collapse-1"
                                                class="accordion-collapse collapse" aria-labelledby="collapse-item-1" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card active">
                                            <div class="accordion-header" id="collapse-item-2"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Day 02: Adventure Begins</button></div>
                                            <div id="collapse-2"
                                                class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Day 03: Airplain Tour</button></div>
                                            <div id="collapse-3"
                                                class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Day 04: Jungle Sufary</button></div>
                                            <div id="collapse-4"
                                                class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Day 05: Explore Culloden</button></div>
                                            <div id="collapse-5"
                                                class="accordion-collapse collapse" aria-labelledby="collapse-item-5" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-6"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Day 06: Loch Ness and the Isle of Skye</button></div>
                                            <div
                                                id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully
                                                        researched "outside the box" thinking via team building technologies.</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card">
                                        <div class="accordion-header" id="collapse-item-7"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">Day 07: Walk the Walls of Stirling Castle</button></div>
                                        <div
                                            id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7" data-bs-parent="#planAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully researched
                                                    "outside the box" thinking via team building technologies.</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-8"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">Day 08: Journey to Thriving Glasgow</button></div>
                                    <div
                                        id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8" data-bs-parent="#planAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully researched
                                                "outside the box" thinking via team building technologies.</p>
                                        </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-9"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">Day 09: Farewell Glasgow</button></div>
                                <div id="collapse-9"
                                    class="accordion-collapse collapse" aria-labelledby="collapse-item-9" data-bs-parent="#planAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully researched "outside
                                            the box" thinking via team building technologies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-10"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">Day 10: Return</button></div>
                                <div id="collapse-10" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-10" data-bs-parent="#planAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Authoritatively engage transparent users for standard compliant vortal. Continually seize technically sound applications rather than an expanded array of methodologies. Competently envisioneer fully researched "outside
                                            the box" thinking via team building technologies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                    <div class="tour-photos">
                        <div class="row g-4 masonary-active">
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-1.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-2.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-3.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-4.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-5.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-6.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-7.jpg') }}" alt="Image"></div>
                            </div>
                            <div class="col-md-6 filter-item">
                                <div class="tour-photo"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/app-8.jpg') }}" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="tour-location">
                         <h4 class="inner-title">Hostel Tamraght</h4>
                        <p class="mb-4 text-justify">Welcome to our surf hostel in Tamraght, just 700 meters from the enchanting Imourane beach! Our beautifully decorated house spans three floors and two rooftop terraces with breathtaking views of the sea and mountains.

                           <p class="mb-4 text-justify">In just 10 minutes on foot, you can reach the beach, and within 5 minutes, discover the many cozy cafes and restaurants in the vicinity. Our accommodation features three double rooms, two with a sea view, as well as a dormitory with four beds. The dormitory boasts a terrace with a splendid view of the sea, the town, and the surrounding mountains.
                        </p>
                           <p class="mb-4 text-justify">With three bathrooms, three kitchens, and a reception, our house is well-equipped. The spacious Moroccan-style living room is perfect for reading, relaxing, and watching TV together.
                        </p>
                        <p class="mb-4 text-justify">The highlight of our hostel is the rooftop terrace at the very top – ideal for a leisurely breakfast or dinner with a rich selection of healthy dishes. We spoil you with freshly cooked specialties, including vegetarian delights and typical Moroccan dishes like the popular Tagine. Welcome to your home away from home – here, you experience a surf vacation with style and comfort!</p>
                            </p>
                        </div>
                </div>
                <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <div class="tour-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d263.22269155141305!2d-9.679540310406486!3d30.51312205967447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMwJzQ2LjkiTiA5wrA0MCc0Ni4yIlc!5e1!3m2!1sen!2sma!4v1704457291982!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                </div>
            </div>

        </div>
        </div>
        <div class="col-xxl-4 col-lg-5" id="booking-form" >
            <aside class="sidebar-area">
                <div class="widget widget_book">
                    <div class="widget-tour-book">
                        <div class="top">
                            <h4 class="title">Book This Accommodation</h4>
                            <p class="price">€{{ config('global.hostelTamraght') }}.00 per person</p>
                        </div>
                        <form id="bookingForm" action="{{ route('bookingPost', ['lang' => $lang]) }}" method="POST" class="widget-form">
                            @csrf
                            <p>This place has a maximum of 12 guests, not including infants. Pets aren't allowed.</p>

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
                                <i class="fal fa-user"></i>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}">
                                <i class="fal fa-envelope"></i>
                            </div>

                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                <i class="fal fa-phone"></i>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="{{ old('country') }}">
                                <i class="fa-light fa-globe"></i>
                            </div>

                            <input type="text" name="accommodation" hidden value="Hostle Tamraght">

                          {{--   <div>
                                <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p>
                                <div class="form-group">
                                    <select name="activity" id="activity" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Activities</option>
                                        <option value="Surf NStays" data-price="350" {{ old('activity') == 'Surf NStays' ? 'selected' : '' }}>Surf N' Stays - €350/Person</option>
                                        <option value="Surf NStays +plus" data-price="470" {{ old('activity') == 'Surf NStays +plus' ? 'selected' : '' }}>Surf N'Stays +plus - €470/Person</option>
                                        <option value="Surf Explore NStays" data-price="540" {{ old('activity') == 'Surf Explore NStays' ? 'selected' : '' }}>Surf Explore N'Stays - €540/Person</option>
                                        <option value="Surf Only" data-price="0" {{ old('activity') == 'Surf Only' ? 'selected' : '' }}>Stay Only</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class=" form-group">
                                    <select disabled class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Accommodation: Hostel Tamraght</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div>
                            <div>
                                <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p>
                                {{-- <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p> --}}

                                {{-- <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p> --}}
                                <div class="form-group">
                                    <select name="pack" id="pack" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Activities</option>
                                        <option value="Premuim Surf & Yoga Pack" data-pack="surfnyoga"  {{ old('pack') == 'Premuim Surf & Yoga Pack' ? 'selected' : '' }}>Premium Surf & Yoga Pack</option>
                                        <option value="Popular Surf Coaching Pack" data-pack="surfcaoching" {{ old('pack') == 'Popular Surf Coaching Pack' ? 'selected' : '' }}>Popular Surf Coaching Pack</option>
                                        {{-- <option value="Surf Explore NStays" data-price="540" {{ old('pack') == 'Surf Explore NStays' ? 'selected' : '' }}>Surf Explore N'Stays - €540/Person</option> --}}
                                        <option value="Stay Only" data-pack="stayonly" {{ old('pack') == 'Stay Only' ? 'selected' : '' }}>Stay Only</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div>

                            <div class="row">
                                {{-- <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p> --}}
                                <div class="form-group col-6 solocoach  {{ old('pack') == 'Popular Surf Coaching Pack' ? '' : 'd-none' }}">
                                    <select name="solocoaching" id="solocoaching" class="form-select nice-select ">
                                        <option value="" disabled="disabled" selected="selected" hidden>Surf Solo</option>
                                        <option value="1 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*1 }}" {{ old('solocoaching') == '1 Surf Solo' ? 'selected' : '' }}>1 Surf Solo</option>
                                        <option value="2 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*2 }}" {{ old('solocoaching') == '2 Surf Solo' ? 'selected' : '' }}>2 Surf Solo</option>
                                        <option value="3 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*3 }}" {{ old('solocoaching') == '3 Surf Solo' ? 'selected' : '' }}>3 Surf Solo</option>
                                        <option value="4 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*4 }}" {{ old('solocoaching') == '4 Surf Solo' ? 'selected' : '' }}>4 Surf Solo</option>
                                        <option value="5 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*5 }}" {{ old('solocoaching') == '5 Surf Solo' ? 'selected' : '' }}>5 Surf Solo</option>
                                        <option value="6 Surf Solo" data-Solo="{{ config('global.solocoachingPrice')*6 }}" {{ old('solocoaching') == '6 Surf Solo' ? 'selected' : '' }}>6 Surf Solo</option>
                                        <option value="0 Surf Solo" data-Solo="0" {{ old('solocoaching') == '0 Surf Solo' ? 'selected' : '' }}>0 Surf Solo</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                                <div class="form-group col-6 buddiescoach {{ old('pack') == 'Popular Surf Coaching Pack' ? '' : 'd-none' }}">
                                    <select name="buddiescoaching" id="buddiescoaching" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Surf Buddies</option>
                                        <option value="1 Surf Buddies" data-buddies="{{ config('global.buddiescoachingPrice')*1 }}" {{ old('buddiescoaching') == '1 Surf Buddies' ? 'selected' : '' }}>1 Surf Buddies</option>
                                        <option value="2 Surf Buddies" data-buddies="{{ config('global.buddiescoachingPrice')*2 }}" {{ old('buddiescoaching') == '2 Surf Buddies' ? 'selected' : '' }}>2 Surf Buddies</option>
                                        <option value="3 Surf Buddies" data-buddies="{{ config('global.buddiescoachingPrice')*3 }}" {{ old('buddiescoaching') == '3 Surf Buddies' ? 'selected' : '' }}>3 Surf Buddies</option>
                                        <option value="0 Surf Buddies" data-buddies="0" {{ old('buddiescoaching') == '0 Surf Buddies' ? 'selected' : '' }}>0 Surf Buddies</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>

                                <div class="form-group col-6 soloyoga {{ old('pack') == 'Premuim Surf & Yoga Pack' ? '' : 'd-none' }}">
                                    <select name="soloyoga" id="soloyoga" class="form-select nice-select ">
                                        <option value="" disabled="disabled" selected="selected" hidden>Surf Solo</option>
                                        <option value="1 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*1 }}" {{ old('soloyoga') == '1 Surf Solo' ? 'selected' : '' }}>1 Surf Solo</option>
                                        <option value="2 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*2 }}" {{ old('soloyoga') == '2 Surf Solo' ? 'selected' : '' }}>2 Surf Solo</option>
                                        <option value="3 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*3 }}" {{ old('soloyoga') == '3 Surf Solo' ? 'selected' : '' }}>3 Surf Solo</option>
                                        <option value="4 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*4 }}" {{ old('soloyoga') == '4 Surf Solo' ? 'selected' : '' }}>4 Surf Solo</option>
                                        <option value="5 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*5 }}" {{ old('soloyoga') == '5 Surf Solo' ? 'selected' : '' }}>5 Surf Solo</option>
                                        <option value="6 Surf Solo" data-Solo="{{ config('global.soloyogaPrice')*6 }}" {{ old('soloyoga') == '6 Surf Solo' ? 'selected' : '' }}>6 Surf Solo</option>
                                        <option value="0 Surf Solo" data-Solo="0" {{ old('soloyoga') == '0 Surf Solo' ? 'selected' : '' }}>0 Surf Solo</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                                <div class="form-group col-6 buddiesyoga {{ old('pack') == 'Premuim Surf & Yoga Pack' ? '' : 'd-none' }}">
                                    <select name="buddiesyoga" id="buddiesyoga" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Surf Buddies</option>
                                        <option value="1 Surf Buddies" data-buddies="{{ config('global.buddiesyogaPrice')*1 }}" {{ old('buddiesyoga') == '1 Surf Buddies' ? 'selected' : '' }}>1 Surf Buddies</option>
                                        <option value="2 Surf Buddies" data-buddies="{{ config('global.buddiesyogaPrice')*2 }}" {{ old('buddiesyoga') == '2 Surf Buddies' ? 'selected' : '' }}>2 Surf Buddies</option>
                                        <option value="3 Surf Buddies" data-buddies="{{ config('global.buddiesyogaPrice')*3 }}" {{ old('buddiesyoga') == '3 Surf Buddies' ? 'selected' : '' }}>3 Surf Buddies</option>
                                        <option value="0 Surf Buddies" data-buddies="0" {{ old('buddiesyoga') == '0 Surf Buddies' ? 'selected' : '' }}>0 Surf Buddies</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div>

                            <div class="rooms {{ old('pack') == 'Stay Only' ? '' : 'd-none' }}">
                                {{-- <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p> --}}
                                <div class="form-group">
                                    <select name="rooms" id="rooms" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Rooms</option>
                                        <option value="1 Deluxe Twin Room" data-price="35" {{ old('rooms') == '1 Deluxe Twin Room' ? 'selected' : '' }}>1 Deluxe Twin Room (2 Beds/each)</option>
                                        <option value="2 Deluxe Twin Room" data-price="70" {{ old('rooms') == '2 Deluxe Twin Room' ? 'selected' : '' }}>2 Deluxe Twin Room (2 Beds/each)</option>
                                        <option value="3 Deluxe Twin Room" data-price="105" {{ old('rooms') == '3 Deluxe Twin Room' ? 'selected' : '' }}>3 Deluxe Twin Room (2 Beds/each)</option>
                                        <option value="0 Deluxe Twin Room" data-price="0" {{ old('rooms') == '0 Deluxe Twin Room' ? 'selected' : '' }}>0 Deluxe Twin Room (2 Beds/each)</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="dorms {{ old('pack') == 'Stay Only' ? '' : 'd-none' }}">
                                {{-- <p>Feel free to explore our activity packages at this link <a href="{{ route('packages',['lang'=>$lang]) }}">Link</a></p> --}}
                                <div class="form-group">
                                    <select name="dorms" id="dorms" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Dormitory</option>
                                        <option value="1 Bed In Dormitory" data-price="20" {{ old('dorms') == '1 Bed In Dormitory' ? 'selected' : '' }}>1 Bed </option>
                                        <option value="2 Beds In Dormitory" data-price="40" {{ old('dorms') == '2 Beds In Dormitory' ? 'selected' : '' }}>2 Beds</option>
                                        <option value="3 Beds In Dormitory" data-price="60" {{ old('dorms') == '3 Beds In Dormitory' ? 'selected' : '' }}>3 Beds</option>
                                        <option value="4 Beds In Dormitory" data-price="80" {{ old('dorms') == '4 Beds In Dormitory' ? 'selected' : '' }}>4 Beds</option>
                                        <option value="5 Beds In Dormitory" data-price="100" {{ old('dorms') == '5 Beds In Dormitory' ? 'selected' : '' }}>5 Beds</option>
                                        <option value="6 Beds In Dormitory" data-price="120" {{ old('dorms') == '6 Beds In Dormitory' ? 'selected' : '' }}>6 Beds</option>
                                        <option value="0 Bed In Dormitory" data-price="0" {{ old('dorms') == '0 Bed In Dormitory' ? 'selected' : '' }}>0 Bed </option>

                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div>

                           {{--  <div class="row">
                                <div class=" form-group">
                                    <select name="person" id="person" class="form-select nice-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Adult</option>
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}" {{ old('person') == $i ? 'selected' : '' }}>{{ $i }} Person</option>
                                        @endfor
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                            </div> --}}

                            <input type="hidden" value="{{ old('total') }}" name="total" id="totalInput" >

                            <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">Checkin-Checkout Date</p>
                            <div class="form-group">
                                <input type="date" class="form-control" name="checkin" id="checkin" placeholder="Checkin" value="{{ old('checkin') }}">
                                {{-- <i class="fal fa-calendar-alt"></i> --}}
                                <i class="fa-light fa-plane-departure"></i>
                            </div>

                            {{-- <p style="margin-bottom: 0;padding-bottom: 0; margin-left:10px">Checkout Date</p> --}}
                            <div class="form-group">
                                <input type="date" class="form-control" name="checkout"  id="checkout" placeholder="Checkout" value="{{ old('Checkout') }}">
                                {{-- <i class="fal fa-calendar-alt"></i> --}}
                                <i class="fa-light fa-plane-arrival"></i>
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message">{{ old('message') }}</textarea>
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
                    $(document).ready(function () {
                        // Intercept form submission
                        $('#bookNowBtn').click(function (event) {
                            event.preventDefault();
                            $('.submit-spin').addClass('fa fa-spinner fa-spin');

                            setTimeout(function () {
                                console.log('Form submitted!');
                                $('#bookingForm').submit();

                            }, 2000);
                        });
                    });
                </script>
                <script>
                    $(document).ready(function () {
                        const checkINDate = new Date();
                        checkINDate.setDate(checkINDate.getDate() + 1);
                        document.getElementById('checkin').valueAsDate =checkINDate;
                        const checkoutDate = new Date();
                        checkoutDate.setDate(checkoutDate.getDate() + 3);
                        document.getElementById('checkout').valueAsDate = checkoutDate;



                                     $('#pack').change(function() {
                        // Check the selected value
                        var selectedPack = $(this).val();


                                        if (selectedPack === 'Stay Only') {
                                            const checkoutDate = new Date();
                                            checkoutDate.setDate(checkoutDate.getDate() + 3);
                                            document.getElementById('checkout').valueAsDate = checkoutDate;
                                       /*   const checkoutDate = new Date(document.getElementById('checkin').valueAsDate);
                                            checkoutDate.setDate(checkoutDate.getDate() + 7);
                                            document.getElementById('checkout').valueAsDate = checkoutDate; */

                                            $('#total').text('€0.00');
                                            $('#totalInput').val(0.00);

                                            $('.solocoach').addClass('d-none');
                                            $('.buddiescoach').addClass('d-none');

                                            $('.soloyoga').addClass('d-none');
                                            $('.buddiesyoga').addClass('d-none');

                                            $('.rooms').removeClass('d-none');
                                            $('.dorms').removeClass('d-none');
                                        }else if(selectedPack === 'Popular Surf Coaching Pack'){

                                            const checkoutDate = new Date(document.getElementById('checkin').valueAsDate);
                                            checkoutDate.setDate(checkoutDate.getDate() + 7);
                                            document.getElementById('checkout').valueAsDate = checkoutDate;

                                            $('.solocoach').removeClass('d-none');
                                            $('.buddiescoach').removeClass('d-none');


                                            $('.soloyoga').addClass('d-none');
                                            $('.buddiesyoga').addClass('d-none');

                                            $('.rooms').addClass('d-none');
                                            $('.dorms').addClass('d-none');

                                        }
                                        else{
                                            const checkoutDate = new Date(document.getElementById('checkin').valueAsDate);
                                            checkoutDate.setDate(checkoutDate.getDate() + 7);
                                            document.getElementById('checkout').valueAsDate = checkoutDate;

                                            $('.solocoach').addClass('d-none');
                                            $('.buddiescoach').addClass('d-none');

                                            $('.soloyoga').removeClass('d-none');
                                            $('.buddiesyoga').removeClass('d-none');

                                            $('.rooms').addClass('d-none');
                                            $('.dorms').addClass('d-none');
                                        }


                            });


                            $('#solocoaching, #buddiescoaching,#soloyoga, #buddiesyoga').change(function() {

                            $('#total').text('€0.00');

                            var solocoaching = parseFloat($('#solocoaching').find(':selected').data('solo')) || 0;
                            var buddiescoaching = parseFloat($('#buddiescoaching').find(':selected').data('buddies')) || 0;
                            var soloyoga = parseFloat($('#soloyoga').find(':selected').data('solo')) || 0;
                            var buddiesyoga = parseFloat($('#buddiesyoga').find(':selected').data('buddies')) || 0;

                            var total = soloyoga+buddiesyoga+buddiescoaching+solocoaching;
                             $('#total').text('€' + total.toFixed(2));
                            $('#totalInput').val(total.toFixed(2));
                            });



                        $('#pack').change(function () {

                            // console.log($(this).find(':selected').data('pack'));
                            var selectedPack = $(this).val();
                            $('#solo').removeAttr('disabled');
                            // $('#solo').prop('disabled', false);

                         /*    // Reset all options and enable/disable as needed
                            $('#solo, #buddies, #rooms, #dorms, #checkout').val('').prop('disabled', false);
                            if (selectedPack === 'Premuim Surf & Yoga Pack' || selectedPack === 'Popular Surf Coaching Pack') {
                                // Disable rooms, dorms, and checkout for Premium and Popular packages
                                $('#rooms, #dorms, #checkout').prop('disabled', true);
                            } else if (selectedPack === 'Surf Only') {
                                // Disable solo and buddies for Surf Only
                                $('#solo, #buddies').prop('disabled', true);
                            } */
                        });


                            function updateTotalCost() {
                                var checkinDate = new Date($('#checkin').val());
                                var checkoutDate = new Date($('#checkout').val());
                                var dormsPrice = parseFloat($('#dorms').find(':selected').data('price')) || 0;
                                var roomsPrice = parseFloat($('#rooms').find(':selected').data('price')) || 0;
                                var selectedPack = $('#pack').val();
                                if (selectedPack != "Premuim Surf & Yoga Pack" & selectedPack != "Popular Surf Coaching Pack") {
                                    if (!isNaN(checkinDate.getTime()) && !isNaN(checkoutDate.getTime())) {
                                    var timeDifference = checkoutDate.getTime() - checkinDate.getTime();
                                    var nights = Math.ceil(timeDifference / (1000 * 3600 * 24));

                                    var totalCost = nights * (dormsPrice + roomsPrice);

                                    $('#total').text('€' + totalCost.toFixed(2));
                                    $('#totalInput').val(totalCost.toFixed(2));
                                } else {
                                    $('#total').text('Invalid Dates');
                                    $('#totalInput').val('');
                                }
                                }


                            }

                            $('#checkin, #checkout, #dorms, #rooms').change(updateTotalCost);
                            updateTotalCost();



                            $('#checkin').change(function () {
                                var selectedPack = $('#pack').val();
                                if (selectedPack === "Premuim Surf & Yoga Pack" || selectedPack === "Popular Surf Coaching Pack") {
                                const checkoutDate = new Date(document.getElementById('checkin').valueAsDate);
                                checkoutDate.setDate(checkoutDate.getDate() + 7);
                                document.getElementById('checkout').valueAsDate = checkoutDate;
                                }
                            });


                      /*   $('#rooms, #dorms').change(function () {
                            // Update total based on selected options
                            var activityPrice = parseFloat($('#pack').find(':selected').data('price')) || 0;
                            var dormsPrice = parseFloat($('#dorms').find(':selected').data('price')) || 0;
                            var roomsPrice = parseFloat($('#rooms').find(':selected').data('price')) || 0;

                            var total = activityPrice + dormsPrice + roomsPrice;



                            $('#total').text('€' + total.toFixed(2));
                            $('#totalInput').val(total.toFixed(2));
                        }); */
                    });
                </script>
                {{-- latest script worked --}}
               {{--  <script>
                    $(document).ready(function () {
                        const checkINDate = new Date();
                        checkINDate.setDate(checkINDate.getDate() + 1);
                        document.getElementById('checkin').valueAsDate =checkINDate;
                        const checkoutDate = new Date();
                        checkoutDate.setDate(checkoutDate.getDate() + 3);
                        document.getElementById('checkout').valueAsDate = checkoutDate;


                        $('#pack, #dorms, #rooms').change(function () {
                            var activityPrice = parseFloat($('#pack').find(':selected').data('price')) || 0;
                            var dormsPrice = parseFloat($('#dorms').find(':selected').data('price')) || 0;
                            var roomsPrice = parseFloat($('#rooms').find(':selected').data('price')) || 0;

                            var total = activityPrice + dormsPrice + roomsPrice;

                            $('#total').text('€' + total.toFixed(2));
                            $('#totalInput').val(total.toFixed(2));
                        });
                    });
                </script>
 --}}

                {{-- <script>
                    $(document).ready(function () {

                            $('#pack, #dorms','#rooms').change(function () {

                                var activityPrice = parseFloat($('#pack').find(':selected').data('price')) || 0;
                                var dormsPrice = parseFloat($('#dorms').find(':selected').data('price')) || 0;
                                var roomsPrice = parseFloat($('#rooms').find(':selected').data('price')) || 0;
                                // var numberOfPersons = parseFloat($('#person').val()) || 0;

                                var total = activityPrice + dormPrice + roomsPrice;
                                console.log(total);

                                $('#total').text('€' + total.toFixed(2));
                                $('#totalInput').val(total.toFixed(2));

                            });
                        });
                </script> --}}



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



                <div class="widget widget_banner">
                    <div class="offer-banner">
                        <div class="banner-logo"><img width="40%" src="{{ asset('assets/img/logo/salty-waves-white.png') }}" alt="Travon"></div><span class="banner-subtitle">Happy Holiday</span>
                        <h3 class="banner-title">Adventure Ture</h3>
                        <div class="offer">
                            <h6 class="offer-title"><span class="text-theme">Salty</span> Waves</h6>
                            <p class="offer-text"><span class="text-theme">Response rate 100%</span> </p>
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
