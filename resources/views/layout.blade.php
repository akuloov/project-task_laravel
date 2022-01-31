<!doctype html>
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="assets/images/x-icon" href="wezom.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
<div class="layout">
    <div class="wrapper">
        <div class="layout__body">
            @include("includes.header")
            @include("includes.popup-menu")
            @include("includes.popup-search")
        </div>
        @yield("content")
        @include("includes.registration-dog")
        @include("includes.footer")
        @include("includes.mobile-menu")
    </div>
    @include("includes.popup-registration")
</div>
<script type="text/javascript" src="assets/js/lozad.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
