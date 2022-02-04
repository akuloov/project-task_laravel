@foreach(config('mock.productFor') as $productForItem)
    <div class="products-top__wrapper">
        <div class="products__type">Корм для {{$productForItem['name']}}</div>
        <div class="products__founded">Найдено {{$productForItem['int']}} товара</div>
    </div>
@endforeach
