import $ from 'jquery';

$('.usage__item').click(function () {
    $('.popup-registration').css('display', 'flex');
    $('.wrapper').css('filter', 'blur(5px)');
    $('.wrapper').css('pointer-events', 'none');
})

$('.popup-registration__close-img').click(function () {
    $('.popup-registration').css('display', 'none');
    $('.wrapper').css('filter', 'none');
    $('.wrapper').css('pointer-events', 'auto');
})

let reg = $('.popup-registration');

$(document).mouseup(function (e) {
    if (!reg.is(e.target) && reg.has(e.target).length === 0) {
        reg.hide();
        $('.wrapper').css('filter', 'none');
        $('.wrapper').css('pointer-events', 'auto');
    }
});
