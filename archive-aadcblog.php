<?php get_header(); ?>
	
<main class="main">

<?php get_template_part( 'template-parts/sub-nav/aadcblog-sub-nav' ); ?>

<!-- news-content -->
<section class="news-content">
	<div class="news-container">
		<div class="news-wrapper">
			<?php
				if(!isset($term)) $term = '';
				echo do_shortcode('
					[ajax_load_more id="48055153" post_type="aadcblog" posts_per_page="'.POSTS_PER_PAGE.'" taxonomy="'.AADCBLOG_CATEGORY.'" taxonomy_terms="'.$term.'" taxonomy_operator="IN" button_label="ロード中"]
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
			<li><a href="<?php echo home_url(); ?>/aadcblog">Dr.Ogawa Blog</a></li>
		</ul>
	</div>
</section>


<?php
get_footer(); ?>