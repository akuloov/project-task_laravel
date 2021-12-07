/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/js/main.js":
/*!*************************************!*\
  !*** ./resources/assets/js/main.js ***!
  \*************************************/
/***/ (function() {

//БУРГЕР МЕНЮ
$('.header__burger').click(function () {
  $('.mobile-menu').toggle();
  $('.header__burger').toggleClass('active');
  $('body').toggleClass('lock');
  $('.mobile-menu').toggleClass('unlock');
}); //КНОПКА ВВЕРХ

var timeOut;

function goUp() {
  var top = Math.max(document.body.scrollTop, document.documentElement.scrollTop); // Получаем максимальные значиния из двух значений, document.documentElement.scrollTop для кроссбраузерности

  if (top > 0) {
    // Если находимся внизу(или, к примеру, в середине экрана), то
    window.scrollBy(0, -100); // Поднятие вверх на 100px

    timeOut = setTimeout('goUp()', 30); // Каждые 30 милисекунд функция срабатывает и страница подымается вверх
  } else clearTimeout(timeOut); // Когда мы уже вверху, функцию прекращаем

} //СВАЙПЕР


new Swiper('.swiper', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  breakpoints: {
    1400: {
      slidesPerView: 5
    },
    1100: {
      slidesPerView: 4
    },
    850: {
      slidesPerView: 3
    },
    600: {
      slidesPerView: 2
    },
    400: {
      slidesPerView: 1
    },
    200: {
      slidesPerView: 1
    }
  },
  loop: true,
  slidesPerView: 5,
  spaceBetween: 0
}); //КНОПКА ПОКАЗАТЬ ЕЩЁ

$('.show-more').on('click', function () {
  $('.about-us__item--hidden').css('display', 'block');
  $(this).css('display', 'none');
  $('.show-more__disable').css('display', 'inline');
}); //КНОПКА СКРЫТЬ

$('.show-more__disable').on('click', function () {
  $('.about-us__item--hidden').css('display', 'none');
  $('.show-more').css('display', 'inline');
  $(this).css('display', 'none');
}); //ЛЕНИВАЯ ЗАГРУЗКА

var observer = lozad();
observer.observe();

/***/ }),

/***/ "./resources/assets/scss/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/scss/app.scss ***!
  \****************************************/
/***/ (function() {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Undefined mixin.\n   ╷\n8  │ ┌     @include media(xs) { // 360\n9  │ │         font-size: 13px;\n10 │ └     }\n   ╵\n  resources\\assets\\scss\\html.scss 8:2  @import\n  resources\\assets\\scss\\app.scss 10:9  root stylesheet\n    at processResult (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\webpack\\lib\\NormalModule.js:751:19)\n    at C:\\OpenServer\\domains\\laravel.loc\\node_modules\\webpack\\lib\\NormalModule.js:853:5\n    at C:\\OpenServer\\domains\\laravel.loc\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\OpenServer\\domains\\laravel.loc\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\OpenServer\\domains\\laravel.loc\\node_modules\\sass-loader\\dist\\index.js:54:7\n    at Function.call$2 (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\sass\\sass.dart.js:96930:16)\n    at render_closure1.call$2 (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\sass\\sass.dart.js:82802:12)\n    at _RootZone.runBinary$3$3 (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\sass\\sass.dart.js:28524:18)\n    at _FutureListener.handleError$1 (C:\\OpenServer\\domains\\laravel.loc\\node_modules\\sass\\sass.dart.js:27046:21)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/assets/js/main.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/scss/app.scss"]();
/******/ 	
/******/ })()
;