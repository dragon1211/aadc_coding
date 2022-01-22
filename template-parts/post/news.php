<section class="home-notice">
	<div class="home-notice__wrapper">
		<nav class="home-notice__nav">
			<ul class="nav-main"><a href="<?php echo home_url(); ?>/about">当院について</a></ul>
			<ul>
				<li><a href="<?php echo home_url();?>/about">当院について</a></li>
				<li><a href="<?php echo home_url();?>/about/doctor">ドクター紹介</a></li>
				<li><a href="<?php echo home_url();?>/about/news">最新のニュース</a></li>
			</ul>
		</nav>
	</div>
</section>


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
		<ul class="breadcrumb">
			<li>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
				</a>
			</li>
			<li><a href="<?php echo home_url(); ?>/about">当院について</a></li>
			<li><a href="<?php echo home_url(); ?>/about/news">新着情報</a></li>
		</ul>
	</div>
</section>