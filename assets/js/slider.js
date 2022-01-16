$(document).ready(function () {

  new Swiper ('.home-news__list .swiper-container', {

		  direction: 'horizontal',
      loop: true,
      zoom: true,
      speed: 1000,

      slidesPerView: 4,
      spaceBetween: 50,

      pagination: '.home-news__list .swiper-pagination',
      paginationClickable: true,

      nextButton: '.home-news__list .swiper-button-next',
      prevButton: '.home-news__list .swiper-button-prev',

   
      breakpoints: {
        1400: {
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

  new Swiper ('.shinbi-teeth__section .swiper-container', {

    direction: 'horizontal',
    loop: true,
    zoom: true,
    speed: 3000,

    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
})
});