<!-- <?php

	$attr = is_home() || is_front_page() ? 'website' : 'article';

	if (is_home()) {
		$canonical_url  = get_bloginfo('url');
	} elseif (is_category()) {
		$canonical_url=get_category_link(get_query_var('cat'));
	} elseif (is_page() || is_single()) { 
		$canonical_url = get_permalink();
			} if ( $paged >= 2 || $page >= 2) {
		$canonical_url = $canonical_url.'page/'.max( $paged, $page ).'/';
	} elseif(is_404()) {
		$canonical_url =  get_bloginfo('url')."/404";
	} else {
		$canonical_url  = get_bloginfo('url');
	};

?> -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
<head prefix="og: og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo $attr?>: http://ogp.me/ns/<?php echo $attr?>#">
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="ここにキーワードを設定します。">
	<meta name="robots" content="index,follow">
	
	<link rel="canonical" href="<?php echo $canonical_url; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/index.css" type="text/css">
			
	<?php wp_head(); ?>
	
</head>


<body <?php body_class(); ?>>
	
	<h1 class="visually__hidden"><?php if(is_front_page()) {bloginfo('name');} else {wp_title();}; ?></h1>
	
	<nav role="navigation" class="header">
		<?php get_template_part( 'template-parts/header/site-header' ); ?>
	</nav>
	
	<nav class="nav-pagetop js-nav-pagetop"></nav>
