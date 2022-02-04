@foreach(config('mock.catalogFor') as $catalogForItem)
    <div class="catalogs__title">Каталог товаров<br><span
            class="catalogs__title--small">{{$catalogForItem['name']}}</span></div>
    <div class="catalogs__description">{{$catalogForItem['description']}}</div>
@endforeach
