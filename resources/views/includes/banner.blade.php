@foreach(config('mock.banner') as $bannerItem)
    <a href="{{$bannerItem['url']}}" class="products__banner-link">
        <picture class="products__banner-img">
            <img class="lozad" data-src="{{$bannerItem['img']}}" alt="">
        </picture>
    </a>
@endforeach
