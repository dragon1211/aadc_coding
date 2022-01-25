$(document).ready(function () {

    
  // bxSlider
  $('.bxslider').bxSlider({
    auto:true,
    responsive : true,
    touchEnabled: true
  });


  // Swiper Slider
  var swiper1 = new Swiper ('.home-news__list .swiper-container', {

		  direction: 'horizontal',
      loop: true,
      zoom: true,
      speed: 1000,

      slidesPerView: 5,
      spaceBetween: 50,

      pagination: '.home-news__list .swiper-pagination',
      paginationClickable: true,

      nextButton: '.home-news__list .swiper-button-next',
      prevButton: '.home-news__list .swiper-button-prev',

   
      breakpoints: {
        1900: {
          slidesPerView: 5,
          spaceBetween: 20
        },

        1750: {
          slidesPerView: 4,
          spaceBetween: 20
        },  

        1400: {
          slidesPerView: 3,
          spaceBetween: 20
        },

        1150: {
          slidesPerView: 2,
          spaceBetween: 20
        },

        645: {
          slidesPerView: 1,
          spaceBetween: 20
        },
      }
  })

  var swiper2 = new Swiper ('.shinbi-teeth__section .swiper-container', {
      direction: 'horizontal',
      loop: true,
      zoom: true,
      speed: 3000,

      slidesPerView: 1,
      spaceBetween: 20,
      autoplay: {
        delay: 1000,
        disableOnInteraction: true,
      },
  })

  var swiper3 = new Swiper ('.lumineers-slide .swiper-container', {
    direction: 'horizontal',
    loop: true,
    zoom: true,
    speed: 4000,

    slidesPerView: 1,
    spaceBetween: 100,
    
    autoplay: {
      delay: 1000,
      disableOnInteraction: true,
      waitForTransition: true
    },
  })

  $(".lumineers-slide .swiper-container").mouseenter(function(){
    swiper3.stopAutoplay();
  });

  $(".lumineers-slide .swiper-container").mouseleave(function(){
    swiper3.startAutoplay();
  });

  $(".shinbi-teeth__section .swiper-container").mouseenter(function(){
    swiper2.stopAutoplay();
  });

  $(".shinbi-teeth__section .swiper-container").mouseleave(function(){
    swiper2.startAutoplay();
  });

});


