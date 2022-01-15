// $(function() {
jQuery(function($) {

  /* --------------------
  GLOBAL VARIABLE
  --------------------- */

  var triggerMenuCnt = function() {
    $('.js-sp-navBtn').click(function() {
      $(this).toggleClass('active');
      $('.js-menu, .js-logo-pc, .js-logo-sp').toggleClass('active');
    });

    $('.js-sp-sub-navBtn').click(function(){
      $(this).toggleClass('active');
      $('.js-sub-nav-menu').toggleClass('active');
    })
  }

  // Trigger background for header
  var triggerBackground = function() {
    if ($(this).scrollTop() > 100) {
      $('.js-header').addClass('active');
    } else {
      $('.js-header').removeClass('active');
    }
  }

  // Animation scroll to top
  var clickPageTop = function() {
    var $pageTop = $('.js-pageTop');
    $pageTop.click(function(e) {
      $('html,body').animate({ scrollTop: 0 }, 300);
    });
  }

  // Animation on scroll
  var scrollLoad = function() {
   var scroll = $(this).scrollTop();
    $('.ani').each(function() {
      var elemPos = $(this).offset().top;
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('in');
      }
    });
  }

  // Trigger Pagetop
  var triggerPageTop = function() {
    var $pageTop = $('.js-pageTop');
    if ($(this).scrollTop() > 200) {
      $pageTop.addClass('active');
    } else {
      $pageTop.removeClass('active');
    }
  }  



  /* --------------------
  INIT (WINDOW ON LOAD)
  --------------------- */
  // Run all script when DOM has loaded
  var init = function() {
    new WOW().init();
    triggerMenuCnt();
    triggerBackground();
    scrollLoad();
    clickPageTop();
  }

  init();


  /* --------------------
  WINDOW ON RESIZE
  --------------------- */
  $(window).resize(function() {
    wWindow = $(window).outerWidth();
  });


  /* --------------------
  WINDOW ON SCROLL
  --------------------- */
  $(window).scroll(function() {
    scrollLoad();
    triggerBackground();
    triggerPageTop();
  });

});