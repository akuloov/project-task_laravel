<!doctype html>
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="wezom.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div class="layout">
        <div class="layout__body">
            @include("includes.header")
            <div class="popup-menu">
                <div class="categories">
                    <a href="" class="categories__item">
                        <svg class="categories__icon categories__icon--animal">
                            <use href="assets/images/icons.svg#icon-dogs"></use>
                        </svg>
                        <span class="categories__text">Собаки</span>
                        <svg class="categories__icon">
                            <use href="assets/images/icons.svg#icon-vector"></use>
                        </svg>
                    </a>
                </div>
            </div>
            @include("includes.popup-search")
        </div>
        <main class="main">
            @yield("content")
        </main>
        @include("includes.footer")
        @include("includes.mobile-menu")
    </div>
    <script type="text/javascript" src="assets/js/lozad.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
