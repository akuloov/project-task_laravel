<div class="pet-card">
    @foreach(config('mock.petCard') as $petCardItem)
        <div class="pet-card__header">
            <div class="pet-card__text">Товары<br>для</div>
            <picture class="pet-card__avatar-wrapper">
                <img data-src="{{$petCardItem['img']}}" alt="" class="pet-card__avatar lozad">
            </picture>
            <svg class="pet-card__question">
                <use href="assets/images/icons.svg#icon-question"></use>
            </svg>
        </div>
        <div class="pet-card__bottom">
            <a href="{{$petCardItem['url']}}" class="pet-card__name-pet">{{$petCardItem['name']}}</a>
            <div class="pet-card__surname">{{$petCardItem['surname']}}</div>
        </div>
    @endforeach
</div>
