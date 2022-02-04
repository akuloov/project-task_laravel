<!doctype html>
<html translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/wezom.ico">
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
<script src="assets/js/main.js"></script>
</body>

</html>
