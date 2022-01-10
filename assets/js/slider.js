$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.home-news__list .swiper-container', {
      // Optional parameters
		direction: 'horizontal',
        loop: true,
        zoom: true,
        speed: 3000,
        slidesOffsetAfter: 100,

        slidesPerView: 3,
        spaceBetween: 20,

        pagination: '.home-news__list .swiper-pagination',
        paginationClickable: true,

		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},

		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		mousewheel: {
			invert: true,
		},
        autoplay: {
            delay: 5000,
        },

        breakpoints: {
            // when window width is >= 320px
            576: {
              slidesPerView: 1,
              spaceBetween: 20
            },
        }
    })
});