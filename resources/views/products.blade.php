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
                    <label class="check">
                        <input type="checkbox" class="check__input" checked>
                        <span class="check__box">
                            <svg class="check__img">
                                <use href="assets/images/icons.svg#icon-check"></use>
                            </svg>
                        </span>
                    </label>
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
            <div class="brand">
                <div class="brand__top">
                    <div class="brand__title">Бренд</div>
                    <svg class="brand__hide">
                        <use href="assets/images/icons.svg#icon-vector"></use>
                    </svg>
                </div>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">ROYAL CANIN</span> <span class="brand__int">(584)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">1st Choice</span> <span class="brand__int">(36)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Home Food</span> <span class="brand__int">(12)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Acana</span> <span class="brand__int">(15)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input" checked>
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Nature's Protection</span> <span class="brand__int">(38)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Purina Pro Plan</span> <span class="brand__int">(49)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Advance</span> <span class="brand__int">(4)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">AnimAll VetLine</span> <span class="brand__int">(17)</span>
                </label>
                <label class="brand__check check">
                    <input type="checkbox" class="check__input">
                    <span class="check__box">
                        <svg class="check__img">
                            <use href="assets/images/icons.svg#icon-check"></use>
                        </svg>
                    </span>
                    <span class="brand__text">Brit Care</span> <span class="brand__int">(19)</span>
                </label>
                <div class="brand__show-more">+ показать все</div>
            </div>
        </div>
    </div>
</div>
@include("includes.actions")
@include("includes.about-us")
@endsection
