<div class="sorting">
    <div class="sorting__left">
        <div class="sorting__by">Сортировать по</div>
        @foreach(config('mock.sortBy') as $sortByItem)
            <div class="sorting__selected">{{$sortByItem['text']}}</div>
        @endforeach
    </div>
    <svg class="sorting__icon">
        <use href="assets/images/icons.svg#icon-vector"></use>
    </svg>
</div>
