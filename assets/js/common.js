// $(function() {
jQuery(function($) {

  /* --------------------
  GLOBAL VARIABLE
  --------------------- */
  // Selector
  // var $pageTop = $('.js-pageTop');

  // Init Value
  var breakpointSP = 767,
      breakpointTB = 1050,
      wWindow = $(window).outerWidth();


  /* --------------------
  FUNCTION COMMON
  --------------------- */
  // Trigger menu content
  var triggerMenuCnt = function() {
    $('.js-sp-navBtn').click(function() {
      $(this).toggleClass('active');
      $('.js-menu, .js-logo-pc, .js-logo-sp').toggleClass('active');
    });
  }

  // Trigger background for header
  var triggerBackground = function() {
    if ($(this).scrollTop() > 100) {
      console.log(1);
      $('.js-header').addClass('active');
    } else {
      $('.js-header').removeClass('active');
    }
  }

  // Setting anchor link
  var anchorLink = function() {
    // Scroll to section
    $('a[href^="#"]').not("a[class*='carousel-control-']").click(function() {
      var href= $(this).attr("href");
      var hash = href == "#" || href == "" ? 'html' : href;
      var position = $(hash).offset().top - 100;
      $('body,html').stop().animate({scrollTop:position}, 1000);
      return false;
    });
  }

  // Animation scroll to top
  var clickPageTop = function() {
    var $pageTop = $('.js-pageTop');
    $pageTop.click(function(e) {
      console.log(1);
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


  // Trigger Accordion
  var triggerAccordion = function() {
    var $accorLabel = $('.js-accorLabel'),
        $accorCnt = $('.js-accorCnt');
    $accorLabel.click(function () {
      $(this).toggleClass('active').siblings($accorCnt).slideToggle();
    });   
  }  

  // Tabs Control
  var tabsControl = function() {
    var $tabsNav = $('.js-tabsNav'),
        $tabsItem = $('.js-tabsItem'),
        $tabsCnt = $('.js-tabsCnt'),
        $tabsPanel = $('.js-tabsPanel');

    // Setting first view
    $tabsPanel.hide();
    $tabsCnt.each(function () {
        $(this).find($tabsPanel).eq(0).show();
    });
    $tabsNav.each(function () {
        $(this).find($tabsItem).eq(0).addClass('active');
    });

    // Click event
    $tabsItem.on('click', function () {
      var tMenu = $(this).parents($tabsNav).find($tabsItem);
      var tCont = $(this).parents($tabsNav).next($tabsCnt).find($tabsPanel);
      var index = tMenu.index(this);
      tMenu.removeClass('active');
      $(this).addClass('active');
      tCont.hide();
      tCont.eq(index).show();
    });
  } 


  // Slider init
  // Slider (Restaurant detail page)
  var initSliders = function() {
    var $slide01 = $('.js-slider01'); 
    var $slide02 = $('.js-slider02'); 
    var $slide02Nav = $('.js-slider02-nav'); 

    // Slider 01
    if ($slide01.length) {
      // Tabs slider
      $slide01.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        swipeToSlide: true,
        // fade: true,
        prevArrow: '<a class="slick-prev" href="javascript:void(0)"><span></span></a>',
        nextArrow: '<a class="slick-next" href="javascript:void(0)"><span></span></a>',
        // responsive: [{
        //   breakpoint: 768,
        //   settings: {
        //     slidesToShow: 1
        //   }
        // }]
      });
    }

    // Slider 02
    if ($slide02.length) {
      // Tabs slider
      $slide02.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        swipeToSlide: true,
        // fade: true,
        asNavFor: $slide02Nav,
        prevArrow: '<a class="slick-prev" href="javascript:void(0)"><span></span></a>',
        nextArrow: '<a class="slick-next" href="javascript:void(0)"><span></span></a>',
      });
    }

    // Slider02 Nav
    if ($slide02.length && $slide02Nav.length) {
      $slide02Nav.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: $slide02,
        arrows: false,
        dots: false,
        // centerMode: true,
        focusOnSelect: true,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }]
      });
    }
  }

  // var matchHeight = function() {
  //   var $elem01 = $('.p-event--infor-item-ttl');
  //   if ($elem01.length) {
  //     $elem01.matchHeight();
  //   }
  // }

  /* --------------------
  INIT (WINDOW ON LOAD)
  --------------------- */
  // Run all script when DOM has loaded
  var init = function() {
    new WOW().init();
    triggerMenuCnt();
    triggerBackground();
    anchorLink();
    scrollLoad();
    objectFitImages();
    clickPageTop();
    triggerAccordion();
    tabsControl();
    initSliders();
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
  });

});