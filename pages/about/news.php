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


<!-- news-section -->
<section class="news-content">
	<div class="news-container">
		<h2 class="news-content__caption">新着情報</h2>
		<div class="news-wrapper">
			<ul class="news-list">
				<?php query_posts('posts_per_page=100&category_name=news&order=DESC'); ?>
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="news-item">
					<a href="<?php the_permalink(); ?>">
						<div class="news-item__image">
							<?php 
								if( has_post_thumbnail()){ 
									the_post_thumbnail('media_thumbnail');
							 	} else {; 
							?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/slide-common.png" alt="">
							<?php }; ?>							
						</div>
						<div class="news-item__desc">
							<p class="comment">
								<span class="badge">メディア情報</span>
								<?php
									$days = 7;
									$today = date('U');
									$date = get_the_time('U');
									$period = date('U', ($today - $date)) / 86400;
									if ($days > $period){;?>
									<span class="new">NEW</span>
								<?php ;}?>
							</p>
							<span class="date">
								<?php echo get_the_date('Y年n月j日'); ?>
							</span>
							<p class="title">
								<?php echo $post-> post_title; ?>
							</p>
						</div>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<a href="/??" class="news-more__link">さらに表示する </a>
	</div>
</section>


<!-- breadcrumb section -->
<section class="breadcrumb-wrapper">
	<div class="breadcrumb-wrapper__content">
		<ul class="breadcrumb">
			<li>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
				</a>
			</li>
			<li><a href="<?php echo home_url(); ?>/about">当院について</a></li>
			<li>新着情報</li>
		</ul>
	</div>
</section>
