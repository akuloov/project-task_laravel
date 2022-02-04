import $ from 'jquery';

$('.selection__top').click(function() {
    $(this).next().toggleClass('selection__bottom--unactive');
    $(this).next().toggleClass('selection__hide--unactive')
})



