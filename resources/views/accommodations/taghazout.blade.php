<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>SALTY WAVES - TAGHAZOUT</title>
    @include('layout.head')
</head>

<body>
  @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">TAGHAZOUT</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>TAGHAZOUT</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="destination-details">

            <section>
                <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Surfers' Paradise with a Bohemian Soul <span class="shape right"><span class="dots"></span></span>
                </span>
                <h2 class="sec-title">Taghazout: Surfers' Paradise with a Bohemian Soul</h2>
                </div>

                <div class=" text-justify">
                    <p class="mb-4">

                        Venture a bit farther north, and you'll find Taghazout, a world-renowned surfers' paradise with a bohemian soul. Picture-perfect waves roll onto golden beaches, creating a haven for surfers seeking the ultimate ride. But Taghazout is more than just a surf spot; it's a cultural mosaic where tradition and modernity dance in harmony.
                    </p>
                    <p class="mb-4">
                        Explore the winding streets adorned with vibrant street art, where the aroma of freshly prepared tagines mingles with the salty sea breeze. Our apartments, perched overlooking the ocean, provide a front-row seat to the beauty of Taghazout. Each corner of this town tells a story—whether you're savoring local cuisine in a beachside café or strolling through the bustling souks.
                    </p>
                    <p class="mb-4">
                        The spirit of adventure extends beyond the surf, as Taghazout offers a gateway to the rugged landscapes and authentic experiences that define Morocco. Embark on a journey to nearby attractions, join yoga sessions overlooking the sea, and let the rhythmic beats of live music carry you into the night.
                    </p>
                </div>


            </section>

                <section style="margin-top: 5rem">
                    <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Gallery <span class="shape right"><span class="dots"></span></span>
                    </span>
                    <h2 class="sec-title">Taghazout Accommodations</h2>
                    </div>
                {{--     <div class="mt-4 mb-4">
                            <div class="row gy-30 masonary-active">
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img style="width:420ppx; height:320px"   src="{{ asset('assets/img/gallery/Taghazout_1_6.jpg') }}" alt="gallery image"> <a   href="{{ asset('assets/img/gallery/gallery_1_1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/Taghazout_1_2.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_2.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/Taghazout_1_3.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_3.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/Taghazout_1_4.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_4.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img src="{{ asset('assets/img/gallery/Taghazout_1_5.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_5.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-auto filter-item">
                                    <div class="gallery-card">
                                        <div class="gallery-img"><img style="width:420ppx; height:320px" src="{{ asset('assets/img/gallery/Taghazout_1_1.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/gallery/gallery_1_6.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                    </div>
                                </div>
                            </div>

                    </div> --}}
                    <div class="mt-4 mb-4">
                        <div class="row gy-30 masonary-active">
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
                            <div class="col-md-6 col-xxl-4 filter-item">
                                <div class="gallery-card">
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/apartement n4/1.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/apartement n4/1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4 filter-item">
                                <div class="gallery-card">
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/apartement n6/2.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/apartement n6/2.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4 filter-item">
                                <div class="gallery-card">
                                    <div class="gallery-img"><img src="{{ asset('assets/img/accommodations/apartement n4/2.jpg') }}" alt="gallery image"> <a href="{{ asset('assets/img/accommodations/apartement n4/2.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>

                <section style="margin-top: 5rem">
               <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Accommodations <span class="shape right"><span class="dots"></span></span>
               </span>
               <h2 class="sec-title">Taghazout Apartments: Your Home by the Sea</h2>
               </div>
                <div class="text-justify">
               <p class="mb-4 text-justify">In Taghazout, Agadir, our apartments offer a different kind of charm. Overlooking the mesmerizing coastline, each apartment is a cozy haven where you can unwind after a day of exploration. Whether you're a solo traveler, a couple, or a group of friends, our apartments provide the comfort and privacy you need.</p>
               <p class="mb-4">But it's not just about the space; it's about the experience. Taghazout, known for its laid-back atmosphere and world-class surf, becomes your playground. Start your day with the sunrise over the Atlantic, and end it with the warm glow of the sunset. Our apartments are not just a place to sleep; they're your home by the sea.</p>
               <p class="mb-4">Beyond the waves, we offer a plethora of activities to enhance your stay. From yoga sessions on the terrace to cultural excursions and beach bonfires, we're here to make your time in Taghazout as vibrant and diverse as the town itself.</p>
               <p class="mb-4">Join us on this journey where passion meets accommodation, and where every day is a new chapter in the story of your adventure. Your surf and stay experience awaits!</p>
                </div>

                <div
                    class="row mb-40 ot-carousel slider-shadow" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
                    <div class="col-lg-6 col-md-6">
                        @include('layout.accommodations.apartment-n4')
                    </div>
                    <div class="col-lg-12 col-md-6">
                        @include('layout.accommodations.apartment-n6')
                    </div>

            </div>
            </section>
            <section style="margin-top: 5rem">
            <div class="title-area text-center"><span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> Accommodations <span class="shape right"><span class="dots"></span></span>
            </span>
            <h2 class="sec-title">Taghazout Riad: Where Tradition Meets Tranquility</h2>
            </div>

            <div class="text-justify">
            <p class="mb-4">
                Step into a world where traditional Moroccan architecture meets modern comfort. Our Riad is a tranquil oasis in the midst of Taghazout's vibrant energy. Immerse yourself in the soothing ambiance of the inner courtyard, adorned with intricate tilework and lush greenery. The Riad offers a blend of privacy and communal spaces, providing a perfect balance for those seeking a unique and serene experience.
            </p>
            <p class="mb-4">
                Your room in the Riad is more than just a place to sleep; it's a retreat within a retreat. The cozy and elegantly decorated rooms provide a haven of relaxation, ensuring you're well-rested for the adventures that await just beyond the Riad's doorstep.
            </p>
            <p class="mb-4">
                As the sun rises over the Atlantic, enjoy a leisurely breakfast on the Riad's rooftop terrace, where panoramic views of the ocean and the town unfold. The Riad is not just a place to stay; it's an invitation to savor the authentic flavors of Taghazout and the warm hospitality of Morocco.
            </p>
            <p class="mb-4">
                Our commitment to providing a holistic experience extends beyond the Riad's walls. Join us for surf lessons that cater to all skill levels, explore the vibrant souks of Taghazout, or embark on a journey to nearby attractions. The Riad is your starting point for a multifaceted adventure.
            </p>
        </div>
            <div class="row mb-30 ot-carousel slider-shadow" data-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="1">
                <div class="col-lg-4 col-md-6">
                    @include('layout.accommodations.surf-riad')
                </div>
            </div>
        </section>
        <div class="col-12">
            {{-- <h3 class="sec-title">Location</h3> --}}
            <span class="sub-title justify-content-center"><span class="shape left"><span class="dots"></span></span> lOCATIONS <span class="shape right"><span class="dots"></span></span>
               </span>
            <div class="col-12">
                <h5>Apartements Location</h5>
                <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d263.1345083202829!2d-9.713227295910578!3d30.545675743825285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMyJzQ0LjYiTiA5wrA0Mic0Ny41Ilc!5e1!3m2!1sen!2sma!4v1704455853266!5m2!1sen!2sma" height="320px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-12">
                <h5>Riad Surf Location</h5>
                <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d263.13646618813675!2d-9.709425761452977!3d30.54495331842164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDMyJzQxLjkiTiA5wrA0MiczMy41Ilc!5e1!3m2!1sen!2sma!4v1704456364132!5m2!1sen!2sma" height="320px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

             </div>
         </div>
        </div>
        </div>


    </section>




    @include('layout.footer')
</body>

</html>
