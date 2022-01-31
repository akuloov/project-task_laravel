$('.button-search').click(function () {
    $('.popup-search').css('display', 'block');
});

$('.search-input__close').click(function () {
    $('.popup-search').css('display', 'none');
});

$('.search-input').on('input', function () {
    if($(this).val().length >= 2){
        $('.search__text').addClass('search__text--unactive');
        $('.search-result__orange-button').addClass('search-result__orange-button--active');
        $('.search-result').addClass('search-result--active');
    }
    else{
        $('.search__text').removeClass('search__text--unactive');
        $('.search-result__orange-button').removeClass('search-result__orange-button--active');
        $('.search-result').removeClass('search-result--active');
    }
});

/*$('.button-search').click(function(){
    $('.popup-search').addClass('popup-search-active');
})

$('.search-input__close').click(function(){
    $('.popup-search').addClass('popup-search-unactive');
})*/
