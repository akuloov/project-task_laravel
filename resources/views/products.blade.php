@extends("layout")

@section("content")

    <div class="container">
        <div class="products">
            <div class="products-left">
                @include('includes.page')
                @include('includes.petCardProducts')
                @include('includes.categoriesProducts')
                @include('includes.autoOrderProducts')
                @include('includes.brand')
                @include('includes.selectionProducts')
            </div>
            <div class="products-right">
                <div class="products-top">
                    @include('includes.productsTitle')
                    @include('includes.sorting')
                </div>
                @include('includes.filters')
                @include('includes.banner')
                @include('includes.productsAvatar')
                <div class="products__items">
                    @include('includes.productsItems')
                </div>
                @include('includes.showMoreProducts')
                @include('includes.navPagesProducts')
            </div>
        </div>
        @include("includes.actions")
        @include("includes.about-us")
    </div>
@endsection
