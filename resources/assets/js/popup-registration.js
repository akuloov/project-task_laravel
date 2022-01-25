$('.usage__item').click(function () {
    $('.popup-registration').css('display', 'flex');
    $('.wrapper').css('filter', 'blur(5px)');
})

$('.popup-registration__close-img').click(function () {
    $('.popup-registration').css('display', 'none');
    $('.wrapper').css('filter', 'none');
})

let reg = $('.popup-registration');

$(document).mouseup(function (e) {
    if (!reg.is(e.target) && reg.has(e.target).length === 0) {
        reg.hide();
        $('.wrapper').css('filter', 'none');
    }
});
