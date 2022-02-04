import $ from 'jquery';

$('.brand__top').click(function () {
    $(this).next().toggleClass('brand__bottom--unactive');
    $(this).next().toggleClass('brand__hide--unactive')
})
