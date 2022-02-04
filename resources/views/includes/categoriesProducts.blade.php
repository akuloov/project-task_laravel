<div class="products__categories">
    <div class="categories-title">Категории</div>
    @foreach(config('mock.categories') as $categoriesItem)
        <div class="categories-item">
            <a href="{{$categoriesItem['url']}}" class="categories-text">{{$categoriesItem['name']}}</a>
            <div class="categories-int">({{$categoriesItem['int']}})</div>
        </div>
    @endforeach
</div>
