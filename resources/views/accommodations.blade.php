<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves Accommodations - Your Coastal Retreat</title>
    <meta name="description" content="Preview our diverse range of coastal accommodations at Salty Waves. From cozy beachfront cottages to spacious ocean-view villas, we offer the perfect lodging for your surf and yoga getaway. Explore our accommodations and book your seaside escape with Salty Waves today!">
    <meta property="og:title" content="Salty Waves Accommodations - Your Coastal Retreat">
    <meta property="og:image" content="{{ asset('assets/img/logo/icon.png') }}">

   @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/accommodation-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Accommodations</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                    <li>Accommodations</li>
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
                           @include('layout.accommodations.tamraght-hostle')
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                            @include('layout.accommodations.surf-riad')
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                           @include('layout.accommodations.apartment-n6')
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                           @include('layout.accommodations.apartment-n4')
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
   @include('layout.footer')
</body>

</html>
