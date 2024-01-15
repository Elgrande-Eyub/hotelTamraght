<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves in Tamraght - Serene Coastal Escape</title>
    <meta name="description" content="Experience the tranquility of Tamraght with Salty Waves. Our accommodations in Tamraght provide a serene coastal escape, surrounded by stunning landscapes and the perfect waves for surfing. Immerse yourself in the Tamraght lifestyle and book your stay with Salty Waves today!">
    <meta property="og:title" content="Salty Waves in Tamraght - Serene Coastal Escape">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">

    @include('layout.head')
</head>

<body>
  @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/tamraghtBack.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tamraght</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>Tamraght</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="space-top space-extra-bottom">
        <div class="container">

            <section >


                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span>Surf Packages <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Tamraght Surf House Hostel</h2>
                </div>


                <div class="text-justify "  style="padding-bottom: 2rem">

                        <p class="mb-4 text-justify">Welcome to our surf hostel in Tamraght, just 700 meters from the enchanting Imourane beach! Our beautifully decorated house spans three floors and two rooftop terraces with breathtaking views of the sea and mountains.
                        </p>
                           <p class="mb-4">In just 10 minutes on foot, you can reach the beach, and within 5 minutes, discover the many cozy cafes and restaurants in the vicinity. Our accommodation features three double rooms, two with a sea view, as well as a dormitory with four beds. The dormitory boasts a terrace with a splendid view of the sea, the town, and the surrounding mountains.
                        </p>
                           <p class="mb-4">With three bathrooms, three kitchens, and a reception, our house is well-equipped. The spacious Moroccan-style living room is perfect for reading, relaxing, and watching TV together.
                        </p>
                        <p class="mb-4">The highlight of our hostel is the rooftop terrace at the very top – ideal for a leisurely breakfast or dinner with a rich selection of healthy dishes. We spoil you with freshly cooked specialties, including vegetarian delights and typical Moroccan dishes like the popular Tagine. Welcome to your home away from home – here, you experience a surf vacation with style and comfort!</p>


                </div>
                <div class="booknow " >
                    <a href=" {{ route('packages', ['lang' => $lang]) }}" class="ot-btn booknow-btn">@lang('index.booknow')</a>
                </div>
            </section>
            <div class="destination-details">
                <section>
                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> A Haven for Surf Enthusiasts <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Tamraght: A Haven for Surf Enthusiasts</h2>
                </div>
                <div class=" text-justify">
                    <p class="mb-4">
                        Tamraght, a laid-back haven with a bohemian spirit, beckons surf enthusiasts and free spirits alike. Feel the pulse of the ocean as you wander through its charming streets. Here, time slows down, inviting you to embrace the rhythm of the waves and the warmth of the local community.
                     </p>
                    <p class="mb-4">
                        In Tamraght, surf is not just a sport; it's a way of life. Wake up to the sound of the Atlantic waves crashing against the shore, and let the salty breeze guide you to our Surf House—a vibrant hub where passion for surfing and the joy of community collide. From seasoned surfers catching the perfect wave to beginners finding their sea legs, Tamraght is a playground for all.
                    </p>
                    <p class="mb-4">
                        As the sun sets, Tamraght transforms into a kaleidoscope of colors, casting its warm glow over the coastline. Engage with fellow travelers, share stories over a cup of Moroccan tea, and immerse yourself in the authentic charm that makes Tamraght a destination like no other.
                    </p>
                </div>
            </section>


                <section >
                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Gallery <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">TAMRAGHT HOSTEL</h2>
                </div>
                <div class="mt-4 mb-4">
                        <div class="row gy-30 masonary-active">
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
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/0004.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/tamraght-hostle/0004.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4 filter-item">
                                <div class="gallery-card">
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/0005.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/tamraght-hostle/0005.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4 filter-item">
                                <div class="gallery-card">
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/tamraght-hostle/0006.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/tamraght-hostle/0006.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                        </div>

                </div>
            </section>





                <section class="space">

                    <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Surf Camp <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title">Discover Best Surf Spots Near Tamraght</h2>
                    </div>

                    <p class="text-justify">Mild winters, temperatures above 20 degrees, and 350+ days of sun annually make Morocco a prime surf destination. Boasting 20+ surf spots just a short flight from Europe, it's the ultimate winter escape. From Anza in the south to Imsouane in the north, Morocco offers diverse waves fueled by big northwest swells.
                         Explore our top 10 surf spots around Taghazout to experience the rich coastal tapestry and exceptional surf conditions.</p>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Anza
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                           <p>Anza caters to beginners with its expansive beach break, providing an ideal entry point to the waves. Venture further out, and intermediate to advanced surfers can revel in a reef break featuring A-Frame waves, breaking both left and right for a thrilling surf experience.</p>
                         </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Onze (Km 11)/ Douze (Km 12)
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p>Named according to their proximity to Agadir: <br>
                                At 11km, you'll find one of the scarce left-handers in the region, breaking over a distinctive rock outcrop.
                                Moving to 12km, this spot boasts a deep-reef break, showcasing a flawless A-frame with both left and right waves.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Banana Point
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p class="text-justify">Situated in the quaint Berber village of Aourir, this pointbreak offers an extended right-hander over a mix of sand and cobblestone. Indulge in the culinary delights of the area, with some of the finest tajines awaiting you.
                                 The spot draws its name from the historical banana plantations that once adorned the landscape, evident today with numerous banana stalls lining the main road.</p>
                            </div>
                          </div>
                        </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Devil's Rock
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">A beach break adorned with a sandy bottom, offering both left and right-hand waves—an ideal playground for novice and intermediate surfers alike. The perfect spot to unwind at charming local cafes, savoring the afterglow of an exhilarating surf session.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Croco
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">A vast expanse of sandy coastline featuring both left and right waves characterizes this surf spot. Named after the distinctive headland resembling a crocodile, it offers a unique and memorable surf experience.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Panorama
                              </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">Panorama Surf Spot is conveniently a brief 10-minute walk from taghazout village, experience a point break during low tide and a dynamic beach break at high tide. This spot comes to life with swells starting at 0.6m, meaning it tends to be flatter during the summer months.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Anchor Point
                              </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">Internationally acclaimed, this iconic Moroccan wave stands as the epitome of renown. Thriving as a potent right-hander point break, its glory unfolds with grandeur on sizable northwest swells, especially reaching heights exceeding 2 meters during the winter.
                               <br><br> In a milestone event from January 25 to February 1, 2020, the Pro Taghazout Bay Competition marked its inaugural presence here, alongside Anza. As part of the World Surf League Men's Qualifying Series, it provided a unique opportunity to witness professional surfers showcasing their prowess in this exceptional setting.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Tamri
                              </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">Internationally acclaimed, this iconic Moroccan wave stands as the epitome of renown. Thriving as a potent right-hander point break, its glory unfolds with grandeur on sizable northwest swells, especially reaching heights exceeding 2 meters during the winter.
                               <br><br> In a milestone event from January 25 to February 1, 2020, the Pro Taghazout Bay Competition marked its inaugural presence here, alongside Anza. As part of the World Surf League Men's Qualifying Series, it provided a unique opportunity to witness professional surfers showcasing their prowess in this exceptional setting.
                                </p>
                              </div>
                            </div>
                          </div>
                      </div>
                </section>

                <div class="col-12">
                    <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> lOCATION <span class="shape right"><span class="dots"></span></span>
               </span>
                    {{-- <h3 class="sec-title">hostle Tamraght Location</h3> --}}
                    <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d263.22269155141305!2d-9.679540310406486!3d30.51312205967447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMwJzQ2LjkiTiA5wrA0MCc0Ni4yIlc!5e1!3m2!1sen!2sma!4v1704457291982!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


        </div>
        </div>
    </section>


    @include('layout.footer')
</body>

</html>
