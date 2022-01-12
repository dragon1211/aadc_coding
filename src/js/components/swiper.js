/**
 * Swiper
 * https://swiperjs.com/
 */
// import Swiper JS
import Swiper from 'swiper';

import SwiperCore, { Autoplay, Navigation, Pagination } from 'swiper/core';

SwiperCore.use([Autoplay, Navigation, Pagination]);


new Swiper ('.home-news__list .swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 4,
  spaceBetween: 20,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    1200: {
      slidesPerView: 3,
      spaceBetween: 20
    },

    900: {
      slidesPerView: 2,
      spaceBetween: 20
    },

    576: {
      slidesPerView: 1,
      spaceBetween: 20
    },
  }
})