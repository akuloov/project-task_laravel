<div class="brand">
    <div class="brand__top">
        <div class="brand__title">Бренд</div>
        <svg class="brand__hide">
            <use href="assets/images/icons.svg#icon-vector"></use>
        </svg>
    </div>
    <div class="brand__bottom">
        @foreach(config('mock.checkboxBrand') as $checkboxBrandItem)
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
