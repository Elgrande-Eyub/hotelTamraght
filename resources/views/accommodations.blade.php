<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Accommodations</title>
   @include('layout.head')
</head>

<body>
    @include('layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
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
