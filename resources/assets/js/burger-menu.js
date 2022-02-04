import $ from 'jquery';

$('.header__burger').click(function () {
    $('.mobile-menu').toggle();
    $('.header__burger').toggleClass('active');
    $('body').toggleClass('lock');
    $('.mobile-menu').toggleClass('unlock');
})
