@foreach(config('mock.productCard') as $productCard)
    <div class="products__container-block">
        <a href="" class="block">
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
