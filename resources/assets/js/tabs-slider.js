import $ from 'jquery';

/*const tabsBtn = document.querySelectorAll('.main__tab');

tabsBtn.forEach(function(item) {
    item.addEventListener('click', function() {
        let currentBtn = item;

        tabsBtn.forEach(function(item) {
            item.classList.remove('tab--active');
        });

        currentBtn.classList.add('tab--active');
    });
});*/

$(document).ready(function() {
    $(".tab").click(function(e) {
        e.preventDefault();

        $('.tab').removeClass('tab--active');
        $('.tab__item').removeClass('tab__item--active');

        $(this).addClass('tab--active');
        $($(this).attr('href')).addClass('tab__item--active');
    });

    $('.tab:first').click();
});
