@extends("layout")

@section("content")
    <div class="main">
        <div class="container">
            @include("includes.sliderAndTabs")
            <div class="blog">
                @include("includes.searchFriend")
                @include("includes.articles")
            </div>
            @include("includes.actions")
            @include("includes.about-us")
        </div>
    </div>
@endsection
