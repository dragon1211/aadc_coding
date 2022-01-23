<?php get_header(); ?>
	
<main class="main">

	<!-- contents -->
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

		$days = 7;
		$today = date('U');
		$date = get_the_time('U');
		$period = date('U', ($today - $date)) / 86400;

		$prev_post = get_previous_post(true);   //in same categories
		$next_post = get_next_post(true); // in same categories
	?>

	<section class="post">

		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- news-section -->
			<section class="post__section">		

				<div class="post__header">
					<p class="comment">
						<span class="badget"><?php echo $cat_name ?></span>
						<?php if ($days > $period){; ?>
							<span class="new"><span>NEW</span></span>
						<?php }; ?>
					</p>
					<div class="date">
						<?php echo get_the_date('Y年n月j日'); ?>
					</div>
					<h2 class="head f30"><?php the_title(); ?></h2>
				</div>	


				<div class="post__content">
					<!-- <div class="thumbnail">
						<?php 
							if(has_post_thumbnail()){ 
								the_post_thumbnail();
							}; 
						?>
					</div> -->
					<div class="detail f16"><?php the_content(); ?></div>
				</div>


				<div class="post-link__wrap">
					<?php if ( ! empty( $prev_post ) ):  ?>
						<a class="post-link__before active"
							 href="<?php echo get_permalink( $prev_post->ID ); ?>">
							 ≪ 前の記事
						</a>
					<?php else: ?>
						<a class="post-link__before">≪ 前の記事</a>
					<?php endif; ?>

					<?php if ( strcmp($cat_slug, 'news') == 0 ):  ?>
						<a class="post-link__before active" href="<?php echo home_url(); ?>/about/news">一覧へ戻る</a>
					<?php else: ?>
						<a class="post-link__before active" href="<?php echo home_url(); ?>/aadcblog">一覧へ戻る</a>
					<?php endif; ?>

					<?php if ( ! empty( $next_post ) ):  ?>
						<a class="post-link__after active"
							 href="<?php echo get_permalink( $next_post->ID ); ?>">
							 次の記事 ≫
						</a>
					<?php else: ?>
						<a class="post-link__after">次の記事 ≫</a>
					<?php endif; ?>

				</div>
			</section>
		<?php endwhile; endif; ?>

	</section>




	<!-- breadcrumb -->
	<section class="breadcrumb-wrapper">
		<div class="breadcrumb-wrapper__content">
			<!-- news -->
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
					<li><a href="<?php echo home_url()."/category/aadcblog/".$cat_slug; ?>"><?php echo $cat_name ?></a></li>
				</ul>
			<?php }; ?>
		</div>
	</section>

</main>
		
<?php get_footer(); ?>