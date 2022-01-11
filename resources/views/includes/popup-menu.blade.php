<?php $kind = (object) [
    [
        'title' => 'КОРМ',
        'items' => ['Сухой корм', 'Консервы', 'Ветеринарные диеты',  'Заменители молока'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Игрушки',
        'items' => ['Интерактивные', 'Удочки и дразнилки', 'Мышки',  'Мячики'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Здоровье',
        'items' => ['Средства от блох и клещей', 'Витамины и добавки', 'Средства от глистов',  'Ветеринарные препараты'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Одежда и обувь',
        'items' => ['Комбинезоны', 'Костюмы', 'Дождевики',  'Свитера'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Товары для дома',
        'items' => ['Домики', 'Когтеточки', 'Спальные места',  'Миски и поилки'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Лакомства',
        'items' => ['Кости', 'Печенье', 'Для дрессировки',  'Сушеные лакомства'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Уход',
        'items' => ['Средства по уходу', 'Инструменты для груминга', 'Туалеты и пеленки'],
    ],
    [
        'title' => 'Косметика',
        'items' => ['Шампуни', 'Духи', 'Кондиционеры и спреи',  'Профессиональная и выставочная косметика'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Амуниция',
        'items' => ['Поводки', 'Ошейники', 'Шлейки',  'Рулетки'],
        'show-more' => 'Смотреть все >'
    ],
    [
        'title' => 'Путешествия',
        'items' => ['Сумки и переноски','Автоаксессуары'],
    ],
]
?>

<div class="popup-menu">
    <div class="categories">
        <a href="#" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal">
                    <use href="assets/images/icons.svg#icon-dogs"></use>
                </svg>
                <span class="categories__text">Собаки</span>
                <svg class="categories__icon categories__icon-vector">
                    <use href="assets/images/icons.svg#icon-vector"></use>
                </svg>
            </div>
        </a>
        <a href="" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal">
                    <use href="assets/images/icons.svg#icon-cats"></use>
                </svg>
                <span class="categories__text">Кошки</span>
                <svg class="categories__icon categories__icon-vector">
                    <use href="assets/images/icons.svg#icon-vector"></use>
                </svg>
            </div>
        </a>
        <a href="" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal">
                    <use href="assets/images/icons.svg#icon-birds"></use>
                </svg>
                <span class="categories__text">Птицы</span>
                <svg class="categories__icon categories__icon-vector">
                    <use href="assets/images/icons.svg#icon-vector"></use>
                </svg>
            </div>
        </a>
        <a href="" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal">
                    <use href="assets/images/icons.svg#icon-rodents"></use>
                </svg>
                <span class="categories__text">Грызуны</span>
                <svg class="categories__icon categories__icon-vector">
                    <use href="assets/images/icons.svg#icon-vector"></use>
                </svg>
            </div>
        </a>
        <a href="" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal categories__icon--fill categories__icon--stroke-none">
                    <use href="assets/images/icons.svg#icon-staar"></use>
                </svg>
                <span class="categories__text">Новинки</span>
            </div>
        </a>
        <a href="" class="categories__link">
            <div class="categories__item">
                <svg class="categories__icon categories__icon--animal categories__icon--fill categories__icon--stroke-none">
                    <use href="assets/images/icons.svg#icon-percent"></use>
                </svg>
                <span class="categories__text">Акции</span>
            </div>
        </a>
    </div>
    <div class="kinds">
        @foreach($kind as $kindCard)
        <div class="kinds__kind kind">
            <div class="kind__title">{{$kindCard['title']}}</div>
            @foreach($kindCard['items'] as $item)
            <a href="" class="kind__item">{{$item}}</a>
            @endforeach
            @if(Arr::hasAny($kindCard, 'show-more'))
            <a href="" class="kind__item kind__item--green">{{$kindCard['show-more']}}</a>
            @endif
        </div>
        @endforeach
        <a href="">
            <picture class="popup-menu__reclame">
                <img src="assets/images/reclame.png" alt="">
            </picture>
        </a>
    </div>
</div>
