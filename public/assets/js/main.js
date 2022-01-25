/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/js/burger-menu.js":
/*!********************************************!*\
  !*** ./resources/assets/js/burger-menu.js ***!
  \********************************************/
/***/ (function() {

$('.header__burger').click(function () {
  $('.mobile-menu').toggle();
  $('.header__burger').toggleClass('active');
  $('body').toggleClass('lock');
  $('.mobile-menu').toggleClass('unlock');
});

/***/ }),

/***/ "./resources/assets/js/button-search.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/button-search.js ***!
  \**********************************************/
/***/ (function() {

$('.button-search').click(function () {
  $('.popup-search').css('display', 'block');
});
$('.search-input__close').click(function () {
  $('.popup-search').css('display', 'none');
});
/*$('.button-search').click(function(){
    $('.popup-search').addClass('popup-search-active');
})

$('.search-input__close').click(function(){
    $('.popup-search').addClass('popup-search-unactive');
})*/

/***/ }),

/***/ "./resources/assets/js/checkbox.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/checkbox.js ***!
  \*****************************************/
/***/ (function() {

$('checkbox-submit__img').click(function () {
  $(this).css('display', 'inline');
});

/***/ }),

/***/ "./resources/assets/js/clear-filters.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/clear-filters.js ***!
  \**********************************************/
/***/ (function() {

$('.filters__orange-text').click(function () {
  $('.filters').css('display', 'none');
  $(this).css('display', 'none');
});
$('.filter__remove').click(function () {
  $(this).parent().css('display', 'none');
});

/***/ }),

/***/ "./resources/assets/js/lazy-load.js":
/*!******************************************!*\
  !*** ./resources/assets/js/lazy-load.js ***!
  \******************************************/
/***/ (function() {

//ЛЕНИВАЯ ЗАГРУЗКА
var observer = lozad();
observer.observe();

/***/ }),

/***/ "./resources/assets/js/main.js":
/*!*************************************!*\
  !*** ./resources/assets/js/main.js ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _button_search_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./button-search.js */ "./resources/assets/js/button-search.js");
/* harmony import */ var _button_search_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_button_search_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _checkbox_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./checkbox.js */ "./resources/assets/js/checkbox.js");
/* harmony import */ var _checkbox_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_checkbox_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _popup_registration_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./popup-registration.js */ "./resources/assets/js/popup-registration.js");
/* harmony import */ var _popup_registration_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_popup_registration_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _popup_menu_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./popup-menu.js */ "./resources/assets/js/popup-menu.js");
/* harmony import */ var _popup_menu_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_popup_menu_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _burger_menu_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./burger-menu.js */ "./resources/assets/js/burger-menu.js");
/* harmony import */ var _burger_menu_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_burger_menu_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _slider_swiper_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./slider-swiper.js */ "./resources/assets/js/slider-swiper.js");
/* harmony import */ var _slider_swiper_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_slider_swiper_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _show_more_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./show-more.js */ "./resources/assets/js/show-more.js");
/* harmony import */ var _show_more_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_show_more_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _lazy_load_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./lazy-load.js */ "./resources/assets/js/lazy-load.js");
/* harmony import */ var _lazy_load_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_lazy_load_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _clear_filters_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./clear-filters.js */ "./resources/assets/js/clear-filters.js");
/* harmony import */ var _clear_filters_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_clear_filters_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _tabs_slider_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./tabs-slider.js */ "./resources/assets/js/tabs-slider.js");











/***/ }),

/***/ "./resources/assets/js/popup-menu.js":
/*!*******************************************!*\
  !*** ./resources/assets/js/popup-menu.js ***!
  \*******************************************/
/***/ (function() {

$('.bb').mouseenter(function () {
  $('.popup-menu').css('display', 'flex');
  $('body').toggleClass('lock');
  $('.popup-menu').toggleClass('unlock');
});
$('.categories__item').click(function () {
  $(this).addClass('categories__item--active');
  $('.kinds').css('display', 'flex');
});
/*$('.bb').mouseleave(function(){
    $('.popup-menu').css('display', 'none');
})*/

$('.popup-menu').mouseleave(function () {
  $(this).css('display', 'none');
  $('body').css('overflow', 'auto');
});

/***/ }),

/***/ "./resources/assets/js/popup-registration.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/popup-registration.js ***!
  \***************************************************/
/***/ (function() {

$('.usage__item').click(function () {
  $('.popup-registration').css('display', 'flex');
  $('.wrapper').css('filter', 'blur(5px)');
});
$('.popup-registration__close-img').click(function () {
  $('.popup-registration').css('display', 'none');
  $('.wrapper').css('filter', 'none');
});
var reg = $('.popup-registration');
$(document).mouseup(function (e) {
  if (!reg.is(e.target) && reg.has(e.target).length === 0) {
    reg.hide();
    $('.wrapper').css('filter', 'none');
  }
});

/***/ }),

/***/ "./resources/assets/js/show-more.js":
/*!******************************************!*\
  !*** ./resources/assets/js/show-more.js ***!
  \******************************************/
/***/ (function() {

//КНОПКА ПОКАЗАТЬ ЕЩЁ
$('.show-more').on('click', function () {
  $('.about-us__item--hidden').css('display', 'block');
  $(this).css('display', 'none');
  $('.show-more__disable').css('display', 'inline');
}); //КНОПКА СКРЫТЬ

$('.show-more__disable').on('click', function () {
  $('.about-us__item--hidden').css('display', 'none');
  $('.show-more').css('display', 'inline');
  $(this).css('display', 'none');
});

/***/ }),

/***/ "./resources/assets/js/slider-swiper.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/slider-swiper.js ***!
  \**********************************************/
/***/ (function() {

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
});

/***/ }),

/***/ "./resources/assets/js/tabs-slider.js":
/*!********************************************!*\
  !*** ./resources/assets/js/tabs-slider.js ***!
  \********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'core-js/modules/es.object.to-string.js'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'core-js/modules/web.dom-collections.for-each.js'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


var tabsBtn = document.querySelectorAll('.main__tab');
tabsBtn.forEach(function (item) {
  item.addEventListener('click', function () {
    var currentBtn = item;
    tabsBtn.forEach(function (item) {
      item.classList.remove('tab--active');
    });
    currentBtn.classList.add('tab--active');
  });
});

/***/ }),

/***/ "./resources/assets/scss/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/scss/app.scss ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	!function() {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = function(result, chunkIds, fn, priority) {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every(function(key) { return __webpack_require__.O[key](chunkIds[j]); })) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	!function() {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/main": 0,
/******/ 			"assets/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = function(chunkId) { return installedChunks[chunkId] === 0; };
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some(function(id) { return installedChunks[id] !== 0; })) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/app"], function() { return __webpack_require__("./resources/assets/js/main.js"); })
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/app"], function() { return __webpack_require__("./resources/assets/scss/app.scss"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;