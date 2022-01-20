$('.usage__item').click(function () {
    $('.popup-registration').css('display', 'flex');
    $('.wrapper').css('filter', 'blur(5px)');
})

$('.popup-registration__close-img').click(function () {
    $('.popup-registration').css('display', 'none');
    $('.wrapper').css('filter', 'none');
})

