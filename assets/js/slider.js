$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.home-news__list .swiper-container', {
      // Optional parameters
		  direction: 'horizontal',
      loop: true,
      zoom: true,
      speed: 1000,

      slidesPerView: 4,
      spaceBetween: 50,

      pagination: '.home-news__list .swiper-pagination',
      paginationClickable: true,

      navigation: {
        nextEl: '.home-news__list .swiper-button-next',
        prevEl: '.home-news__list .swiper-button-prev',
      },

   
      breakpoints: {
        // when window width is >= 320px
        1200: {
          slidesPerView: 3,
          spaceBetween: 40
        },

        900: {
          slidesPerView: 2,
          spaceBetween: 40
        },

        576: {
          slidesPerView: 1,
          spaceBetween: 20
        },
      }
  })
});