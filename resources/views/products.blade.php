@extends("layout")


@section("content")
<div class="container">
    <div class="products">
        <div class="products-left">
            <a href="" class="products__page page">
                Собаки <span class="page--gray1">></span> <span class="page--gray2">Корм для собак</span>
            </a>
            <div class="pet-card">
                <div class="pet-card__header">
                    <div class="pet-card__text">Товары<br>для</div>
                    <picture class="pet-card__avatar-wrapper">
                        <source class="pet-card__avatar" srcset="assets/images/dog-avatar.webp" type="image/webp">
                        <img class="pet-card__avatar" src="assets/images/dog-avatar.png" alt="">
                    </picture>
                    <svg class="pet-card__question">
                        <use href="assets/images/icons.svg#icon-question"></use>
                    </svg>
                </div>
                <div class="pet-card__bottom">
                    <a href="" class="pet-card__name-pet">Джексон ></a>
                    <div class="pet-card__surname">Английский кокер-спаниель<br> Взрослая</div>
                </div>
            </div>
            <div class="products__categories">
                <div class="categories-title">Категории</div>
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
            <div class="products__auto-order auto-order">
                <div class="auto-order__top">
                    <div class="auto-order__checkbox checkbox-submit__checkbox">
                        <svg class="checkbox-submit__img">
                            <use href="assets/images/icons.svg#icon-done"></use>
                        </svg>
                    </div>
                    <div class="auto-order__img">
                        <svg class="auto-order__icon">
                            <use href="assets/images/icons.svg#icon-reload"></use>
                        </svg>
                    </div>
                    <a href="" class="auto-order__text">Автозаказ</a>
                    <svg class="auto-order__question">
                        <use href="assets/images/icons.svg#icon-question"></use>
                    </svg>
                </div>
                <div class="auto-order__bottom">
                    Экономия до 10% на заказах
                </div>
            </div>
        </div>
    </div>
</div>
@include("includes.actions")
@include("includes.about-us")
@endsection
