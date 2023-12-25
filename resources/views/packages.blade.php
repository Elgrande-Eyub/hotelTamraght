<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Salty Waves - Packages</title>
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

                    </div>

                </div>

            </div>
        </div>
    </section>
   @include('layout.footer')
</body>

</html>
