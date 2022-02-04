@extends("layout")

@section("content")

    <?php
    $petCard = (object)[
        [
            'name' => 'Джексон >',
            'surname' => 'Английский кокер-спаниель Взрослая',
            'img' => 'assets/images/dog-avatar.png',
            'url' => '#'
        ]
    ];

    $categories = (object)[
        [
            'name' => 'Сухой корм',
            'int' => '584',
            'url' => '#'
        ],
        [
            'name' => 'Консервы',
            'int' => '317',
            'url' => '#'
        ],
        [
            'name' => 'Ветеринарные диеты',
            'int' => '158',
            'url' => '#'
        ],
        [
            'name' => 'Заменители молока',
            'int' => '59',
            'url' => '#'
        ]
    ];

    $checkboxBrand = (object)[
        [
            'name' => 'ROYAL CANIN',
            'int' => '584',
        ],
        [
            'name' => '1st Choice',
            'int' => '123',
        ],
        [
            'name' => 'Home Food',
            'int' => '545',
        ],
        [
            'name' => 'Acana',
            'int' => '766',
        ],
        [
            'name' => 'Nature`s Protection',
            'int' => '38',
            'checked' => 'checked',
        ],
        [
            'name' => 'Purina Pro Plan',
            'int' => '584',
        ],
        [
            'name' => 'Advance',
            'int' => '123',
        ],
        [
            'name' => 'AnimAll VetLine',
            'int' => '65',
        ],
        [
            'name' => 'Brit Care',
            'int' => '34',
        ]
    ];

    $checkboxClass = (object)[
        [
            'name' => 'Премиум',
            'int' => '34',
        ],
        [
            'name' => 'Суперпремиум',
            'int' => '12',
        ],
        [
            'name' => 'Холистик',
            'int' => '5',
        ],
    ];

    $selection = (object)[
        [
            'name' => 'ИНГРЕДИЕНТЫ'
        ],
        [
            'name' => 'ОСОБЕННОСТИ'
        ],
        [
            'name' => 'ВЕС УПАКОВКИ'
        ],
        [
            'name' => 'ПОРОДА'
        ]
    ];

    $productFor = (object)[
        [
            'name' => 'собак',
            'int' => '1074'
        ]
    ];

    $avatarPet = (object)[
        [
            'img' => 'assets/images/dog-avatar.png'
        ]
    ];

    $filter = (object)[
        [
            'name' => 'Nature`s Protection',
        ],
        [
            'name' => 'С Автозаказом',
        ],
        [
            'name' => 'Суперпремиум',
        ],
    ];

    $sortBy = (object)[
        [
            'text' => 'Подходящим для питомца',
        ],
    ];

    $banner = (object)[
        [
            'url' => '#',
            'img' => 'assets/images/banner.png'
        ]
    ];

    ?>

    <div class="container">
        <div class="products">
            <div class="products-left">
                <a href="" class="products__page page">
                    Собаки <span class="page--gray1">></span> <span class="page--gray2">Корм для собак</span>
                </a>
                <div class="pet-card">
                    @foreach($petCard as $petCardItem)
                        <div class="pet-card__header">
                            <div class="pet-card__text">Товары<br>для</div>
                            <picture class="pet-card__avatar-wrapper">
                                <img src="{{$petCardItem['img']}}" alt="" class="pet-card__avatar">
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
                <div class="products__categories">
                    <div class="categories-title">Категории</div>
                    @foreach($categories as $categoriesItem)
                        <div class="categories-item">
                            <a href="{{$categoriesItem['url']}}" class="categories-text">{{$categoriesItem['name']}}</a>
                            <div class="categories-int">({{$categoriesItem['int']}})</div>
                        </div>
                    @endforeach
                </div>
                <div class="products__auto-order auto-order">
                    <div class="auto-order__top">
                        <label class="check">
                            <input type="checkbox" class="check__input" checked>
                            <span class="check__box">
                            <svg class="check__img">
                                <use href="assets/images/icons.svg#icon-check"></use>
                            </svg>
                        </span>
                        </label>
                        <div class="auto-order__img">
                            <svg class="auto-order__icon">
                                <use href="assets/images/icons.svg#icon-reload"></use>
                            </svg>
                        </div>
                        <a href="" class="auto-order__text">Автозаказ</a>
                        <svg class="auto-order__question">
                            <use href="assets/images/icons.svg#icon-question"></use>
                        </svg>
                    </div>
                    <div class="auto-order__bottom">
                        Экономия до 10% на заказах
                    </div>
                </div>
                <div class="brand">
                    <div class="brand__top">
                        <div class="brand__title">Бренд</div>
                        <svg class="brand__hide">
                            <use href="assets/images/icons.svg#icon-vector"></use>
                        </svg>
                    </div>
                    <div class="brand__bottom">
                        @foreach($checkboxBrand as $checkboxBrandItem)
                            <label class="brand__check check">
                                <input type="checkbox"
                                       @if(Arr::hasAny($checkboxBrandItem, 'checked'))  {{$checkboxBrandItem['checked']}}
                                       @endif class="check__input">
                                <span class="check__box">
                                <svg class="check__img">
                                    <use href="assets/images/icons.svg#icon-check"></use>
                                </svg>
                            </span>
                                <span class="brand__text">{{$checkboxBrandItem['name']}}</span> <span
                                    class="brand__int">({{$checkboxBrandItem['int']}})</span>
                            </label>
                        @endforeach
                        <div class="brand__show-more">+ показать все</div>
                    </div>
                </div>
                <div class="selection">
                    <div class="selection__top selection__top--margin">
                        <div class="selection__title">Цена, ₴</div>
                        <svg class="selection__hide">
                            <use href="assets/images/icons.svg#icon-vector"></use>
                        </svg>
                    </div>
                    <input type="range" min="0" max="10000" value="12" class="input-range">
                </div>
                <div class="selection">
                    <div class="selection__top">
                        <div class="selection__title">Класс</div>
                        <svg class="selection__hide">
                            <use href="assets/images/icons.svg#icon-vector"></use>
                        </svg>
                    </div>
                    <div class="selection__bottom">
                        @foreach($checkboxClass as $checkboxClassItem)
                            <label class="brand__check check">
                                <input type="checkbox"
                                       @if(Arr::hasAny($checkboxClassItem, 'checked'))  {{$checkboxClassItem['checked']}}
                                       @endif class="check__input">
                                <span class="check__box">
                                <svg class="check__img">
                                    <use href="assets/images/icons.svg#icon-check"></use>
                                </svg>
                            </span>
                                <span class="brand__text">{{$checkboxClassItem['name']}}</span> <span
                                    class="brand__int">({{$checkboxClassItem['int']}})</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                @foreach($selection as $selectionItem)
                    <div class="selection">
                        <div class="selection__top selection__top--margin">
                            <div class="selection__title">{{$selectionItem['name']}}</div>
                            <svg class="selection__hide">
                                <use href="assets/images/icons.svg#icon-vector"></use>
                            </svg>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="products-right">
                <div class="products-top">
                    @foreach($productFor as $productForItem)
                        <div class="products-top__wrapper">
                            <div class="products__type">Корм для {{$productForItem['name']}}</div>
                            <div class="products__founded">Найдено {{$productForItem['int']}} товара</div>
                        </div>
                    @endforeach
                    <div class="sorting">
                        <div class="sorting__left">
                            <div class="sorting__by">Сортировать по</div>
                            @foreach($sortBy as $sortByItem)
                                <div class="sorting__selected">{{$sortByItem['text']}}</div>
                            @endforeach
                        </div>
                        <svg class="sorting__icon">
                            <use href="assets/images/icons.svg#icon-vector"></use>
                        </svg>
                    </div>
                </div>
                <div class="filters">
                    @foreach($filter as $filteritem)
                        <div class="filters__filter filter">
                            <div class="filter__text">{{$filteritem['name']}}</div>
                            <svg class="filter__remove">
                                <use href="assets/images/icons.svg#icon-close"></use>
                            </svg>
                        </div>
                    @endforeach
                    <div class="filters__orange-text orange-text">Очистить фильтры</div>
                </div>
                @foreach($banner as $bannerItem)
                    <a href="{{$bannerItem['url']}}" class="products__banner-link">
                        <picture class="products__banner-img">
                            <img src="{{$bannerItem['img']}}" alt="">
                        </picture>
                    </a>
                @endforeach
                <div class="products-avatar">
                    <picture class="products-avatar__img">
                        @foreach($avatarPet as $avatarPetItem)
                            <img src="{{$avatarPetItem['img']}}" alt="">
                        @endforeach
                    </picture>
                    Товары с аватаром животного – наиболее подходящие для данного питомца
                </div>
                <div class="products__items">
                    @foreach(config('mock.productCard') as $productCard)
                        <div class="products__container-block">
                            <a href="" class="block block_bgc1">
                                <picture class="block__img">
                                    <img class="lozad" data-src="{{$productCard['img']}}" alt="">
                                </picture>
                                <div class="block__text">
                                    @if(Arr::hasAny($productCard, 'firstText'))
                                        <div class="block__first-text">{{$productCard['firstText']}}</div>
                                    @endif
                                    @if(Arr::hasAny($productCard, 'firstTextGreen'))
                                        <div
                                            class="block__first-text block__first-text_green">{{$productCard['firstTextGreen']}}</div>
                                    @endif
                                    @if(Arr::hasAny($productCard, 'secondText'))
                                        <div class="block__second-text">{{$productCard['secondText']}}</div>
                                    @endif
                                </div>
                            </a>
                            <div class="description">
                                <a href="" class="description-title__block">
                                    <h1 class="description__title">{{$productCard['nameProduct']}}</h1>
                                </a>
                                <span class="description-stars">
                                    @foreach($productCard['stars'] as $stars)
                                        <img class="description-star__item lozad" data-src="{{$stars}}"
                                             alt="">
                                    @endforeach
                            <span class="description-star__integer">{{$productCard['starInt']}}</span>
                        </span>
                                <div class="description__second-price"><span
                                        class="description__price_before1">{{$productCard['oldPrice']}}</span> <span
                                        class="description__second-price_bold">{{$productCard['newPrice']}}</span>
                                </div>
                                <div class="description__first-price">
                                    <div class="first-price__img">
                                        <img src="assets/images/Vector.png" alt="">
                                    </div>
                                    <span class="description__first-price_text">{{$productCard['firstPrice']}}</span>
                                </div>
                                <button class="buy">
                                    <img class="buy__img" src="assets/images/basket.png" alt="">
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="products__show-products show-products">
                    <svg class="show-products__icon">
                        <use href="assets/images/icons.svg#icon-reload2"></use>
                    </svg>
                    <div class="show-products__text">Показать<br>еще 24 товара</div>
                </div>
                <div class="products__nav-pages nav-pages">
                    <div class="nav-pages__item nav-pages__item--orange">1</div>
                    <div class="nav-pages__item">2</div>
                    <div class="nav-pages__item">3</div>
                    <div class="nav-pages__item nav-pages__item--white">4</div>
                    <div class="nav-pages__item">5</div>
                    <div class="nav-pages__item">...</div>
                    <div class="nav-pages__item">18</div>
                    <svg class="nav-pages__icon">
                        <use href="assets/images/icons.svg#icon-vector"></use>
                    </svg>
                </div>
            </div>
        </div>
        @include("includes.actions")
        @include("includes.about-us")
    </div>
@endsection
