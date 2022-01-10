@extends("layout")


@section("products")
<div class="products">
    <div class="products-left">
        <div class="products__page">
            Собаки <span class="products__page--gray1">></span> <span class="products__page--gray2">Корм для собак</span>
        </div>
        <div class="pet-card">
            <div class="pet-card__header">
                <div class="pet-card__text">Товары<br>для</div>
                <picture class="pet-card__avatar-wrapper">

                    <img class="pet-card__avatar" src="assets/images/dog-avatar.png" alt="">
                </picture>
                <svg class="pet-card__question">
                    <use href="assets/images/icons.svg#icon-question"></use>
                </svg>
            </div>
            <div class="pet-card__bottom">
                <div class="pet-card__name-pet">Джексон ></div>
                <a href="" class="pet-card__white-button white-button">Английский кокер-спаниель<br>Взрослая</a>
            </div>
        </div>
        <div class="products__categories">
            <div class="categories-item">
                <a href="" class="categories-text">Сухой корм</a>
                <div class="categories-int">(584)</div>
            </div>
            <div class="categories-item">
                <a href="" class="categories-text">Консервы</a>
                <div class="categories-int">(317)</div>
            </div>
            <div class="categories-item">
                <a href="" class="categories-text">Ветеринарные диеты</a>
                <div class="categories-int">(158)</div>
            </div>
            <div class="categories-item">
                <a href="" class="categories-text">Заменители молока</a>
                <div class="categories-int">(59)</div>
            </div>
        </div>
        <div class="auto-order">
            
        </div>
    </div>
</div>
@endsection
