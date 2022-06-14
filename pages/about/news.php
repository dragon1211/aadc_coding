<?php get_template_part( 'template-parts/sub-nav/about-sub-nav' ); ?>


<!-- news-content -->
<section class="news-content">
	<div class="news-container">
		<h2 class="news-content__caption">ニュースアーカイブ</h2>
		<div class="news-wrapper">
			<?php
				if(!isset($term)) $term = '';
				echo do_shortcode('
					[ajax_load_more id="48055153" post_type="post" posts_per_page="'.POSTS_PER_PAGE.'" button_label="ロード中"]
				');  //ul="news-list" li="news-item"
			?>
		</div>
	</div>
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
			<li>ニュース<br class="sp-onlyt">アーカイブ</li>
		</ul>
	</div>
</section>
