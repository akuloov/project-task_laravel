@foreach(config('mock.catalog') as $catalogCard)
    <div class="catalog-bottom__catalog-card catalog-card">
        <a href="" class="catalog-card__link-img">
            <picture class="catalog-card__img">
                <img class="catalog-card__img--width lozad" data-src="{!!$catalogCard['img']!!}" alt="">
            </picture>
        </a>
        <div class="catalog-card__main">
            <div class="catalog-card__title">{{$catalogCard['title']}}</div>
            <a href="" class="catalog-card__look-all">{{$catalogCard['look-all']}}</a>
        </div>
        <div class="catalog-card__items">
            @foreach($catalogCard['items'] as $item)
                <a href="" class="catalog-card__item">{{$item}}</a>
            @endforeach
        </div>
        @if(Arr::hasAny($catalogCard, 'more'))
            <a href="" class="catalog-card__more">{{$catalogCard['more']}}</a>
        @endif
    </div>
@endforeach
