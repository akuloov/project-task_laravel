<div class="filters">
    @foreach(config('mock.filter') as $filteritem)
        <div class="filters__filter filter">
            <div class="filter__text">{{$filteritem['name']}}</div>
            <svg class="filter__remove">
                <use href="assets/images/icons.svg#icon-close"></use>
            </svg>
        </div>
    @endforeach
    <div class="filters__orange-text orange-text">Очистить фильтры</div>
</div>
