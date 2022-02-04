import $ from 'jquery';

$('.filters__orange-text').click(function(){
    $('.filters').css('display', 'none');
    $(this).css('display', 'none');
})

$('.filter__remove').click(function(){
    $(this).parent().css('display', 'none');
})
