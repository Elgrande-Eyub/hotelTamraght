<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves Packages - Unforgettable Surf, Yoga, and Stay Experiences</title>
    <meta name="description" content="Explore Salty Waves' curated packages for a perfect blend of surf, yoga, and accommodation. Immerse yourself in thrilling surf lessons, rejuvenate with yoga sessions, and relax in our comfortable accommodations. Discover the ideal package for your dream surf and yoga retreat. Book your unforgettable experience with Salty Waves today!">
    <meta property="og:title" content="Salty Waves Packages - Unforgettable Surf, Yoga, and Stay Experiences">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">

   @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Packages</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>Packages</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">

                            @include('layout.packages.surfnstay')

                        </div>
                      {{--   <div class="col-xl-4 col-lg-6 col-md-6 mb-30">


                            @include('layout.packages.surfnstayplus')


                        </div> --}}
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">


                            @include('layout.packages.surfcoaching')


                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">


                            @include('layout.packages.basicsurf')


                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
   @include('layout.footer')
</body>

</html>
