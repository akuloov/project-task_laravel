@extends("layout")

@section("content")

    <?php $catalog = (object)[
        [
            'img' => '/assets/images/catalog-card1.png',
            'title' => 'Корм',
            'look-all' => 'Смотреть все >',
            'items' => ['Сухой корм', 'Консервы', 'Ветеринарные диеты', 'Заменители молока']
        ],
        [
            'img' => '/assets/images/catalog-card2.png',
            'title' => 'Лакомства',
            'look-all' => 'Смотреть все >',
            'items' => ['Кости', 'Печенье', 'Для дрессировки', 'Сушеные лакомства']
        ],
        [
            'img' => '/assets/images/catalog-card3.png',
            'title' => 'Игрушки',
            'look-all' => 'Смотреть все >',
            'items' => ['Интерактивные', 'Удочки и дразнилки', 'Мышки', 'Мячики'],
            'more' => 'Больше категорий'
        ],
        [
            'img' => '/assets/images/catalog-card4.png',
            'title' => 'Уход',
            'look-all' => 'Смотреть все >',
            'items' => ['Средства по уходу', 'Инструменты для груминга', 'Туалеты и пеленки']
        ],
        [
            'img' => '/assets/images/catalog-card5.png',
            'title' => 'Здоровье',
            'look-all' => 'Смотреть все >',
            'items' => ['Средства от блох и клещей', 'Витамины и добавки', 'Средства от глистов', 'Ветеринарные препараты']
        ],
        [
            'img' => '/assets/images/catalog-card6.png',
            'title' => 'Косметика',
            'look-all' => 'Смотреть все >',
            'items' => ['Шампуни', 'Духи', 'Кондиционеры и спреи', 'Профессиональная и выставочная косметика']
        ],
        [
            'img' => '/assets/images/catalog-card7.png',
            'title' => 'Одежда и обувь',
            'look-all' => 'Смотреть все >',
            'items' => ['Комбинезоны', 'Костюмы', 'Дождевики', 'Свитера'],
            'more' => 'Больше категорий'
        ],
        [
            'img' => '/assets/images/catalog-card8.png',
            'title' => 'Амуниция',
            'look-all' => 'Смотреть все >',
            'items' => ['Поводки', 'Ошейники', 'Шлейки', 'Рулетки', 'Намордники'],
            'more' => 'Больше категорий'
        ],
        [
            'img' => '/assets/images/catalog-card9.png',
            'title' => 'Товары для дома',
            'look-all' => 'Смотреть все >',
            'items' => ['Домики', 'Когтеточки', 'Спальные места', 'Миски и поилки']
        ],
        [
            'img' => '/assets/images/catalog-card10.png',
            'title' => 'Путешествия',
            'look-all' => 'Смотреть все >',
            'items' => ['Сумки и переноски', 'Автоаксессуары']
        ],
    ];

    $catalogFor = (object)[
        [
            'name' => 'для собак',
            'description' => 'Товары и аксессуары для собак и щенков',
        ],
    ];

    $catalogSelect = (object)[
        [
            'text' => 'Корм',
            'url' => '#'
        ],
        [
            'text' => 'Лакомства',
            'url' => '#'
        ],
        [
            'text' => 'Игрушки',
            'url' => '#'
        ],
        [
            'text' => 'Уход',
            'url' => '#'
        ],
        [
            'text' => 'Здоровье',
            'url' => '#'
        ],
        [
            'text' => 'Косметика',
            'url' => '#'
        ],
        [
            'text' => 'Одежда и обувь',
            'url' => '#'
        ],
        [
            'text' => 'Амуниция',
            'url' => '#'
        ],
        [
            'text' => 'Путешествия',
            'url' => '#'
        ],
        [
            'text' => 'Товары для дома',
            'url' => '#'
        ],
    ];

    ?>

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
                    @foreach($catalogFor as $catalogForItem)
                        <div class="catalogs__title">Каталог товаров<br><span
                                class="catalogs__title--small">{{$catalogForItem['name']}}</span></div>
                        <div class="catalogs__description">{{$catalogForItem['description']}}</div>
                    @endforeach
                    <div class="catalogs__items">
                        @foreach($catalogSelect as $catalogSelectItem)
                            <a href="{{$catalogSelectItem['url']}}" class="catalogs__item">{{$catalogSelectItem['text']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="catalog-bottom">
            @foreach($catalog as $catalogCard)
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
