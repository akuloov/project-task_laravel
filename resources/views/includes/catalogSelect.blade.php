@foreach(config('mock.catalogSelect') as $catalogSelectItem)
    <a href="{{$catalogSelectItem['url']}}"
       class="catalogs__item">{{$catalogSelectItem['text']}}</a>
@endforeach
