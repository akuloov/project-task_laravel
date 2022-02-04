import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

new Swiper('.swiper', {
    modules: [Navigation, Pagination],

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    breakpoints: {
        1400: {
            slidesPerView: 5,
        },

        1100: {
            slidesPerView: 4,
        },

        850: {
            slidesPerView: 3,
        },

        600: {
            slidesPerView: 2,
        },

        400: {
            slidesPerView: 1,
        },

        200: {
            slidesPerView: 1,
        },

    },
    loop: true,

    slidesPerView: 5,

    spaceBetween: 0,

    observer: true,
    observeParents: true,

});
