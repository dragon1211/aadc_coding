<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="1ZKnj3JpFjiITW1bXsYvA5vII6-WLrydPn4vIYXSqNw" />

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/index.css" type="text/css">
			

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-15698057-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-15698057-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 766117336 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-766117336"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'AW-766117336');
	</script>

	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/jquery-3.5.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/swiper-3.4.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/ofi.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/jquery.bxslider.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/jquery.matchHeight-min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/libs/locomotive-scroll.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/common.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/assets/js/slider.js"></script>

	<!-- Event snippet for 電話問い合わせ conversion page -->
	<script>
		window.addEventListener('load', function() {
		document.querySelectorAll('[href*="tel:"]').forEach(function(link){
			link.addEventListener('click', function() { 
		gtag('event', 'conversion', {'send_to': 'AW-766117336/Zfs2CMmPlv0BENiLqO0C'});
			});
		});
		});
	</script>

	<?php wp_head(); ?>
	
</head>


<body <?php body_class(); ?>>
	
	<?php get_template_part( 'template-parts/header-footer/site-header-menu' ); ?>
	
	<nav role="navigation" class="header">
		<?php get_template_part( 'template-parts/header-footer/site-header' ); ?>
	</nav>
