@foreach(config('mock.page') as $page)
    <a href="" class="products__page page">
        {{$page['page1']}} <span class="page--gray1">></span> <span class="page--gray2">{{$page['page2']}}</span>
    </a>
@endforeach
