<div class="tour-card">
    <div class="tour-card__img"><img src=" {{ asset('assets/img/surfnstays/surfnstaysplus.jpg') }}" alt="Tour Image"> <span class="tour-card__tag"><i class="far fa-heart"></i></span></div>
    <div class="tour-card__content">
        <div class="tour-card__top"><a href="https://www.google.com/maps" class="tour-card__location"><i class="fa-light fa-location-dot"></i> Tamraght</a>
            <div class="tour-card__rating"><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i></div>
        </div>
        <h3 class="tour-card__title"><a href="{{ route('surf-stayplus', ['lang' => $lang]) }}">Surf N' Stays +PLUS</a></h3>
        <div class="tour-meta"><span><i class="fa-light fa-clock"></i> 7 Day</span> <span><i class="fa-light fa-turn-up"></i> Level 2</span></div>
        <div class="tour-card__bottom"><span class="tour-card__price">From <span class="price">€470</span></span> <a href="{{ route('surf-stayplus', ['lang' => $lang]) }}" class="link-btn">See Details <i class="fas fa-arrow-up-right"></i></a></div>
    </div>
</div>
