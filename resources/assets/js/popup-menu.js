$('.bb').mouseenter(function () {
    $('.popup-menu').css('display', 'flex');
})

$('.categories__item').click(function () {
    $(this).addClass('categories__item--active');
    $('.kinds').css('display', 'flex');
})

/*$('.bb').mouseleave(function(){
    $('.popup-menu').css('display', 'none');
})*/

$('.popup-menu').mouseleave(function () {
    $(this).css('display', 'none');
});