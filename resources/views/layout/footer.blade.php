

<div class="whats-float d-none d-xl-inline-block">
    <a href="https://api.whatsapp.com/send?phone=212678718045"
       target="_blank">
       <i class="fa-brands fa-whatsapp"></i><span>WhatsApp<br><small>+212 678-718045</small></span>
    </a>
</div>
<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="newsletter-wrap" data-bg-src="{{ asset('assets/img/bg/subscribe_bg_1.svg') }}">
            <h2 class="sec-title text-white mb-2">Get Special Offers And More From Travon</h2>
            <p class="text-white fs-md mb-4">Sign up now and get the best deals straight in your inbox!</p>
            <form class="newsletter-form">
                @csrf
                <div class="form-group">
                    <input class="form-control" id="newsletter-input" name="email" type="email" placeholder="Email Address" >
                    <i class="fal fa-envelope"></i>
                </div>
                <button type="submit" class="ot-btn">
                    <i class="submit-spin "></i> Subscribe</button>
            </form>
            <p class="text-white fs-md mt-3 d-none messageNewsletter"></p>
            {{-- <p class="text-white fs-md mt-3 d-none messageError"></p> --}}

        </div>

    </div>
</section>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Intercept form submission
        $('.newsletter-form').submit(function(event) {
            event.preventDefault();
            $('.submit-spin').addClass('fa fa-spinner fa-spin');
            // Get form data
            var formData = $(this).serialize();

            // Submit form via AJAX
            $.ajax({
                type: 'POST',
                url: '/subscribe', // Laravel route
                data: formData,
                dataType: 'json',
                success: function(response) {

                    $('.messageNewsletter').addClass('d-none');


                   setTimeout(function() {
                       $('.messageNewsletter').removeClass('d-none');
                       $('.messageNewsletter').text(response.message);
                       $('#newsletter-input').val('');
                       $('.submit-spin').removeClass('fa fa-spinner fa-spin');
                   }, 1500); // 1.5 seconds delay
                },
                error: function(xhr, status, error) {
                    var responseJSON = xhr.responseJSON
                    $('.messageNewsletter').addClass('d-none');
                   setTimeout(function() {
                       $('.messageNewsletter').removeClass('d-none');
                       $('.messageNewsletter').text(responseJSON.message);
                       $('.submit-spin').removeClass('fa fa-spinner fa-spin');
                       $('#newsletter-input').val('');
                   }, 1500);

                }
            });
        });
    });
</script>


<footer class="footer-wrapper footer-layout1">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="ot-widget-about">
                            <div class="about-logo">
                                <a href="{{ route('index' ,['lang'=>$lang]) }}"><img src="{{ asset('assets/img/logo/salty-waves-white.png') }}" alt="SALTY WAVES"></a>
                            </div>
                            <p class="about-text text-justify">
                                Embrace the coastal charm at Salty Waves Retreat in Tamraght. Where every stay is a dance with salty waves and each sunrise brings the promise of a new adventure.
                            </p>
                            <div class="ot-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a><a href="https://www.instagram.com/salty_waves_taghazout"><i class="fab fa-instagram"></i></a> <a href="https://api.whatsapp.com/send?phone=212675111894"><i class="fab fa-whatsapp"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('index', ['lang' => $lang]) }}">Home</a></li>
                                <li><a href="{{ route('about', ['lang' => $lang]) }}">About Us</a></li>
                                <li><a href="{{ route('packages', ['lang' => $lang]) }}">Packages</a></li>
                                <li><a href="{{ route('accommodations', ['lang' => $lang]) }}">Accommodations</a></li>
                                <li><a href="{{ route('contact', ['lang' => $lang]) }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="ot-widget-contact">
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                                <p class="info-box_text"><a href="{{ route('contact', ['lang' => $lang]) }}" class="info-box_link">Tamraght-Taghazout , Agadir , Morocco</a>
                                    </p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                                <p class="info-box_text">
                                    <a href="tel:+4917624898825" class="info-box_link">+49 1762 489 8825</a>
                                    <a href="tel:+212678718045"  class="info-box_link">+212 678-718045</a></p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                                <p class="info-box_text"><a href="mailto:info@salty-wave.com" class="info-box_link">info@salty-wave.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Gallery Showcase</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_1-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ ASSET('assets/img/widget/gallery_1_1.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_2-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ ASSET('assets/img/widget/gallery_1_2.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_3-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_3.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_4-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_4.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_5-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_5.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                            <div class="gallery-thumb"><img src="{{ ASSET('assets/img/widget/gallery_1_6-thumb.jpg') }}" alt="Gallery Image"> <a href="{{ asset('assets/img/widget/gallery_1_6.jpg') }}" class="gallery-btn popup-image"><i class="fas fa-plus"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap style2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="https://www.instagram.com/salty_waves_taghazout" target="_blank" style="color: #1684d8">SALTY WAVES</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-end d-none d-lg-block">
                    <div class="">
                        <p class="copyright-text">Developped By <a href="https://easyeno.com/" target="_blank" style="color: #1684d8">Easyeno Media</a> <i class="fal fa-copyright"></i> 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path></svg></div>

    {{-- <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
