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
        @foreach(config('mock.checkboxClass') as $checkboxClassItem)
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
@foreach(config('mock.selection') as $selectionItem)
    <div class="selection">
        <div class="selection__top selection__top--margin">
            <div class="selection__title">{{$selectionItem['name']}}</div>
            <svg class="selection__hide">
                <use href="assets/images/icons.svg#icon-vector"></use>
            </svg>
        </div>
    </div>
@endforeach
