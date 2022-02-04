import $ from 'jquery';

//КНОПКА ПОКАЗАТЬ ЕЩЁ
$('.show-more').on('click', function () {
    $('.about-us__item--hidden').css('display', 'block');
    $(this).css('display', 'none');
    $('.show-more__disable').css('display', 'inline');
})

//КНОПКА СКРЫТЬ
$('.show-more__disable').on('click', function () {
    $('.about-us__item--hidden').css('display', 'none');
    $('.show-more').css('display', 'inline');
    $(this).css('display', 'none');
})
