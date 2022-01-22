<?php get_header(); ?>
	
	<main class="main" role="main">
	


	<!-- contents -->
	<div class="contents">


		<?php $post = $wp_query->post; if ( in_category(array( 'news' )) ) { ?>
			<?php get_template_part( 'template-parts/post/news' ); ?>
		
		<?php } else if( in_category(array( 'campaign' )) ){ ?>	
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- news-header -->
			<header class="campaign-header">
				<h1 class="head f30">CAMPAIGN</h1>
			</header>
			<!-- /news-header -->	
			<!-- news-section -->
			<section class="news-section">
				<div class="date f14">
					<?php
					$days = 7;
					$today = date('U');
					$date = get_the_time('U');
					$period = date('U', ($today - $date)) / 86400;
					?>
					<?php if ($days > $period){; ?>
					<div class="badge">NEW</div>
					<?php }; ?>
					<?php echo get_the_date('Y年n月j日'); ?>
				</div>
				<h2 class="head f24"><?php the_title(); ?></h2>
				<div class="news-content">
					<?php if(has_post_thumbnail()){ ?>
					<?php the_post_thumbnail(); ?>
					<?php }; ?>
					<div class="detail f14"><?php the_content(); ?></div>
				</div>
				<div class="list-link f14">
					<a href="javascript:history.back();">一つ前のページへ戻る</a>
				</div>
			</section>		
			<?php endwhile; endif; ?>
		
		<?php } else if( in_category(array( 'media' )) ){ ?>
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- news-header -->
			<header class="media-header">
				<h1 class="head f30">MEDIA</h1>
			</header>
			<!-- /news-header -->
			<!-- news-section -->
			<section class="news-section">
				<div class="date f14">
					<?php
					$days = 7;
					$today = date('U');
					$date = get_the_time('U');
					$period = date('U', ($today - $date)) / 86400;
					?>
					<?php if ($days > $period){; ?>
					<div class="badge">NEW</div>
					<?php }; ?>
					<?php echo get_the_date('Y年n月j日'); ?>
				</div>
				<h2 class="head f24"><?php the_title(); ?></h2>
				<div class="news-content">
					<?php if(has_post_thumbnail()){ ?>
					<?php the_post_thumbnail(); ?>
					<?php }; ?>
					<div class="detail f14"><?php the_content(); ?></div>
				</div>
				<div class="list-link f14">
					<a href="<?php site_url(); ?>/about-us/media-information/">メディア情報一覧に戻る</a>
				</div>		
			</section>
			<?php endwhile; endif; ?>
		
		<?php } else if( in_category(array( 'facebook' )) ){ ?>
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- news-header -->
			<header class="facebook-header">
				<h1 class="head f30">FACEBOOK</h1>
			</header>
			<!-- /news-header -->
			<!-- news-section -->
			<section class="news-section">
				<div class="date f14">
					<?php
					$days = 7;
					$today = date('U');
					$date = get_the_time('U');
					$period = date('U', ($today - $date)) / 86400;
					?>
					<?php if ($days > $period){; ?>
					<div class="badge">NEW</div>
					<?php }; ?>
					<?php echo get_the_date('n月j日'); ?>
				</div>
				<h2 class="head f24"><?php the_title(); ?></h2>
				<div class="news-content">
					<?php if(has_post_thumbnail()){ ?>
					<?php the_post_thumbnail(); ?>
					<?php }; ?>
					<div class="detail f14"><?php the_content(); ?></div>
				</div>
				<div class="list-link fb f14">
					<a href="javascript:history.back();">一つ前のページへ戻る</a>
				</div>
			</section>
			<?php endwhile; endif; ?>
			
		<?php } else { ?>
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- news-header -->
			<header class="blog-header">
				<h1 class="head f30">AA歯科恵比寿の院長Dr小川ブログ</h1>
			</header>
			<!-- /news-header -->
			<!-- news-section -->
			<section class="news-section">
				<div class="date f14">
					<?php
					$days = 7;
					$today = date('U');
					$date = get_the_time('U');
					$period = date('U', ($today - $date)) / 86400;
					?>
					<?php if ($days > $period){; ?>
					<div class="badge">NEW</div>
					<?php }; ?>
					<?php echo get_the_date('n月j日'); ?>
				</div>
				<h2 class="head f24"><?php the_title(); ?></h2>
				<div class="news-content">
					<?php if(has_post_thumbnail()){ ?>
					<?php the_post_thumbnail(); ?>
					<?php }; ?>
					<div class="detail f14"><?php the_content(); ?></div>
				</div>
				<div class="list-link f14">
					<a href="<?php site_url(); ?>/aadcblog/">ブログ一覧に戻る</a>
				</div>
			</section>
			<?php endwhile; endif; ?>
		<?php } ?>
		<!-- /news-section -->		

		
<?php get_footer(); ?>