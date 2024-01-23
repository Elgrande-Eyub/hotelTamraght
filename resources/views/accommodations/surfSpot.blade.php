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


    <section class=" space-extra-bottom">
        <div class="container">

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
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Imsouane
                              </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              <p class="text-justify">
                                Imsouane, an enchanting fishing village an hour from Taghazout, offers two unique surf spots: "The Bay" and "The Cathedral." <br>
"The Bay" provides consistently clean waves, protected by the south-facing bay, with an impressive 600m ride length. Ideal for longboarding on smaller swell days. <br>
For a more powerful experience, try "The Cathedral," an exposed beach break with right and left peaks ending on a reef. <br>
Don't miss the picturesque lookout spot just before town, offering a stunning bay view, and explore local markets for fresh seafood – a perfect spot for a healthy lunch.
 </p>
                              </div>
                            </div>
                          </div>
                      </div>
                </section>



        </div>
        </div>
    </section>


    @include('layout.footer')
</body>

</html>
