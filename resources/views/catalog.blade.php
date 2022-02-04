@extends("layout")

@section("content")

    <div class="catalog-header__background">
        <div class="container">
            <div class="catalog-header">
                @include("includes.petCardCatalog")
                <div class="catalog__catalogs catalogs">
                    @include("includes.catalogTitle")
                    <div class="catalogs__items">
                        @include("includes.catalogSelect")
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="catalog-bottom">
            @include("includes.catalogCard")
        </div>
    </div>
    <div class="container">
        @include("includes.about-us")
    </div>

@endsection
