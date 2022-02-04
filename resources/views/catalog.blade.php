@extends("layout")

@section("content")

    <div class="catalog-header__background">
        <div class="container">
            <div class="catalog-header">
                <div class="pet-card">
                    <div class="pet-card__header">
                        <div class="pet-card__text">Товары<br>для</div>
                        <picture class="pet-card__avatar-wrapper">
                            <img class="pet-card__avatar" src="assets/images/dog-avatar.png" alt="">
                        </picture>
                        <svg class="pet-card__question">
                            <use href="assets/images/icons.svg#icon-question"></use>
                        </svg>
                    </div>
                    <div class="pet-card__bottom">
                        <div class="pet-card__name-pet">У вас есть собака?</div>
                        <a href="" class="pet-card__white-button white-button">+ Добавить питомца</a>
                    </div>
                </div>
                <div class="catalog__catalogs catalogs">
                    @foreach(config('mock.catalogFor') as $catalogForItem)
                        <div class="catalogs__title">Каталог товаров<br><span
                                class="catalogs__title--small">{{$catalogForItem['name']}}</span></div>
                        <div class="catalogs__description">{{$catalogForItem['description']}}</div>
                    @endforeach
                    <div class="catalogs__items">
                        @foreach(config('mock.catalogSelect') as $catalogSelectItem)
                            <a href="{{$catalogSelectItem['url']}}"
                               class="catalogs__item">{{$catalogSelectItem['text']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="catalog-bottom">
            @foreach(config('mock.catalog') as $catalogCard)
                <div class="catalog-bottom__catalog-card catalog-card">
                    <a href="" class="catalog-card__link-img">
                        <picture class="catalog-card__img">
                            <img class="catalog-card__img--width" src="{!!$catalogCard['img']!!}" alt="">
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
        </div>
    </div>
    <div class="container">
        @include("includes.about-us")
    </div>
@endsection
