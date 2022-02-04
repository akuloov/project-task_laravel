<div class="popup-search">
    <div class="search">
        <div class="container">
            <input type="text" placeholder="Поиск ..." class="search-input">
            <svg class="search-input__close close-icon">
                <use href="assets/images/icons.svg#icon-close"></use>
            </svg>
            <div class="search__text">Начните вводить категорию или название товара (артикул),<br> бренда или клиники
            </div>
            <div class="search-result">
                <div class="search-result__types">
                    <div class="type">
                        <div class="type__title">
                            <div class="type__text">Товары</div>
                            <div class="type__number">256</div>
                        </div>
                        <div class="type__items">
                            <a href="#" class="type__item">Корм для собак (86)</a>
                            <a href="#" class="type__item">Корм для котов (65)</a>
                            <a href="#" class="type__item">Корм для птиц (32)</a>
                            <a href="#" class="type__item">Корма для грызунов (18)</a>
                            <a href="#" class="type__item">Аксессуары для кормления животных (3)</a>
                            <a href="#" class="type__item">Кормушки, поилки для собак (18)</a>
                        </div>
                    </div>
                    <div class="type">
                        <div class="type__title">
                            <div class="type__text">Статьи</div>
                            <div class="type__number">24</div>
                        </div>
                        <div class="type__items">
                            <a href="#" class="type__item">Корм для собак (86)</a>
                            <a href="#" class="type__item">Корм для котов (65)</a>
                            <a href="#" class="type__item">Корм для птиц (32)</a>
                            <a href="#" class="type__item">Корма для грызунов (18)</a>
                        </div>
                    </div>
                    <div class="type">
                        <div class="type__title">
                            <div class="type__text">Ветклиники</div>
                            <div class="type__number">5</div>
                        </div>
                        <div class="type__items">
                            <a href="#" class="type__item">Корма для грызунов (18)</a>
                            <a href="#" class="type__item">Аксессуары для кормления животных (3)</a>
                            <a href="#" class="type__item">Кормушки, поилки для собак (18)</a>
                        </div>
                    </div>
                </div>
                <div class="search-result__products">
                    <div class="search-result__top">
                        <div class="search-result__column">
                            <div class="type__name">Корм для собак</div>
                            @foreach(config('mock.searchResultDog') as $resultDogCard)
                                <div class="search-result__product-search product-search">
                                    <picture class="product-search__img">
                                        <img class="lozad" data-src="{{$resultDogCard['img']}}" alt="">
                                    </picture>
                                    <div class="product-search__right-block">
                                        <a href="{{$resultDogCard['url']}}"
                                           class="product-search__name">{{$resultDogCard['name']}}</a>
                                        <div class="product-search__price">
                                            @if(Arr::hasAny($resultDogCard, 'old-price'))
                                                <span
                                                    class="product-search__old-price">{{$resultDogCard['old-price']}}</span>
                                            @endif
                                            <span class="product-search__new-price">{{$resultDogCard['price']}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="search-result__column">
                            <div class="type__name">Корм для котов</div>
                            @foreach(config('mock.searchResultCat') as $resultCatCard)
                                <div class="search-result__product-search product-search">
                                    <picture class="product-search__img">
                                        <img class="lozad" data-src="{{$resultCatCard['img']}}" alt="">
                                    </picture>
                                    <div class="product-search__right-block">
                                        <a href="{{$resultCatCard['url']}}"
                                           class="product-search__name">{{$resultCatCard['name']}}</a>
                                        <div class="product-search__price">
                                            @if(Arr::hasAny($resultCatCard, 'old-price'))
                                                <span
                                                    class="product-search__old-price">{{$resultCatCard['old-price']}}</span>
                                            @endif
                                            <span class="product-search__new-price">{{$resultCatCard['price']}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="search-result__column">
                            <div class="type__name">Корм для котов</div>
                            @foreach(config('mock.searchResultBird') as $resultBirdCard)
                                <div class="search-result__product-search product-search">
                                    <picture class="product-search__img">
                                        <img class="lozad" data-src="{{$resultBirdCard['img']}}" alt="">
                                    </picture>
                                    <div class="product-search__right-block">
                                        <a href="{{$resultBirdCard['url']}}"
                                           class="product-search__name">{{$resultBirdCard['name']}}</a>
                                        <div class="product-search__price">
                                            @if(Arr::hasAny($resultBirdCard, 'old-price'))
                                                <span
                                                    class="product-search__old-price">{{$resultBirdCard['old-price']}}</span>
                                            @endif
                                            <span class="product-search__new-price">{{$resultBirdCard['price']}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="search-result__orange-button orange-button">Все Товары</a>
        </div>
    </div>
</div>
