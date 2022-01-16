$(function() {
	
	// Reload Top
/*
	$(window).load(function(){
		$('html,body').stop().animate({ scrollTop: 0 }, '0');
	});
*/
	
	// Opening Animation
/*
    $(".headline-news").css({bottom:'-50px'});
    $(".home .site-header").css({top:'-100px'});
    $(".home .menu-btn").css({top:'-100px'});
    
    setTimeout(function(){
        $(".headline-news").stop().animate({bottom:'0'},500);
        $(".home .site-header").stop().animate({top:'0'},500);
        $(".home .menu-btn").stop().animate({top:'20px'},500);
    },0);
*/
    
	
	// Navigation Mouseover
	$('.header-logo a, .header-nav a, .header-info a .tel, .click-detail a, .case ul li a, .border p a, .home-news ul li a, .page-top, .footer-nav a, .media-section ul li a, .blog-section ul li a, .list-link a, .appoint-btn a, .yoyaku a').css({
		opacity: 1.0,
		filter: "alpha(opacity=100)"
	}).hover(function(){
		$(this).fadeTo(200,0.5);
	},function(){
		$(this).fadeTo(200,1.0);
	})
	
	// Drawer Navi
	$('#menu-drawer-nav li.toggle-head').click(function() {
		$(this).children('ul.sub-menu').slideToggle();
	});
        
	// Pagetop
	var topBtn = $('.page-top');    
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
	
	// Scrolling
	$('a[href^=#]').click(function(){ 
        var speed = 500; //移動完了までの時間(sec)を指定
        var href= $(this).attr("href"); 
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + -70;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
	
	// Headline News	
	function headline() {
		setTimeout(function() {
			headline();
			$(".headline-news li").not(':first').css('display', 'none');
			$(".headline-news li:first").fadeOut('fast', function() {
				$(this).next().fadeIn('normal');
				$(this).clone().appendTo(".headline-news ul");
				$(this).remove();
			});
		}, 5000);
	}
	var n_size = $(".headline-news li").size();
	if(n_size > 1) {
		headline();
	}

	// Slideshow
    $.sublime_slideshow({
        src:[
	        {url:"wp-content/themes/aadc-wp/assets/images/home2.png"},
	        {url:"wp-content/themes/aadc-wp/assets/images/home3.png"},
	        {url:"wp-content/themes/aadc-wp/assets/images/home4.png"},
	        {url:"wp-content/themes/aadc-wp/assets/images/home5.png"}
        ],
        duration:   10,
        fade:       5,
        scaling:    1.2,
        rotating:   false
    });
    
    // Scroll Event
	$('.effect').css("opacity","0");
	$(window).scroll(function (){
		$('.effect').each(function(){
			var imgPos = $(this).offset().top;    
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > imgPos - windowHeight + 500){
				$(this).animate({ 
					"opacity": "1"
				}, 500);
			}
		});
	});
	
	// Accordion
	$(".ceramic-anchor").on("click", function() {
		$('.medical-flow').slideToggle();
	});
	$(".collaboration-anchor").on("click", function() {
		$('.collaboration').slideToggle();
	});
	$(".alignment-anchor").on("click", function() {
		$('.alignment-price').slideToggle();
	});	
	$(".impact-anchor").on("click", function() {
		$('.impact-wrap').slideToggle();
	});
/*
	$(".qa-head").on("click", function() {
		$('.qa').slideToggle();
	});
*/
	
	// bxSlider
	$('.bxslider').bxSlider({
		auto:true,
		responsive : true
	});

	function footernav() {
		$(this).toggleClass("active").next().slideToggle(300);
	}

	$("li.toggle a").click(footernav);

});