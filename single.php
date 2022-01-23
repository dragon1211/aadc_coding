<?php get_header(); ?>
	
	<main class="main" role="main">
	
	<!-- contents -->
	<div class="contents">

		<?php 
			$post = $wp_query->post; 
			if ( in_category(array( 'news' )) ) { 
				get_template_part( 'template-parts/sub-nav/about-sub-nav' ); 
			} else {
				get_template_part( 'template-parts/sub-nav/aadcblog-sub-nav' ); 
			} 
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			$cat_slug = $category[0]->category_nicename; 
		?>

		<section class="post-news">
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- news-section -->
				<section class="post-news__section">		
					<div class="post-news__header">
						<?php
							$days = 7;
							$today = date('U');
							$date = get_the_time('U');
							$period = date('U', ($today - $date)) / 86400;
						?>
						<?php if ($days > $period){; ?>
							<p class="badge"><span>NEW</span></p>
						<?php }; ?>
						<div class="date">
							<?php echo get_the_date('Y年n月j日'); ?>
						</div>
						<h2 class="head f30"><?php the_title(); ?></h2>
					</div>	
					<div class="post-news__content">
						<!-- <div class="thumbnail">
							<?php 
								if(has_post_thumbnail()){ 
									the_post_thumbnail();
								}; 
							?>
						</div> -->
						<div class="detail f16"><?php the_content(); ?></div>
					</div>	
				</section>
			<?php endwhile; endif; ?>
		</section>
	

		<!-- breadcrumb -->
		<section class="breadcrumb-wrapper">
			<div class="breadcrumb-wrapper__content">
				<!-- news breadcrumb -->
				<?php if ( in_category(array( 'news' )) ) { ?>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
						</a>
					</li>
					<li><a href="<?php echo home_url(); ?>/about">当院について</a></li>
					<li><a href="<?php echo home_url()."/about/".$cat_slug; ?>"><?php echo $cat_name ?></a></li>
				</ul>
				<?php } else { ?>
				<!-- aadcblog -->
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
						</a>
					</li>
					<li><a href="<?php echo home_url(); ?>/aadcblog">Dr.Ogawa Blog</a></li>
					<li><a href="<?php echo home_url()."/aadcblog/".$cat_slug; ?>"><?php echo $cat_name ?></a></li>
				</ul>
				<?php }; ?>
			</div>
		</section>

	</div>

		
<?php get_footer(); ?>