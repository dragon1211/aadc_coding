<?php get_header(); ?>
	
<main class="main">
<!-- inquiry-section -->
<section class="content">
	<!-- header -->
	<div class="search-header">
		<h1 class="head f20">サイト検索</h1>
	</div>
	<!-- body -->
	<section class="search-result-section">
		<div class="search-form-wrap">
			<?php get_search_form(); ?>
		</div>
		<h1 class="page-title">
			<?php
				$s=get_search_query();
				$args = array(
					's' =>$s,
					'posts_per_page'   => -1,
				);
				// The Query
				$the_query = new WP_Query( $args );
				printf(
					/* translators: %s: Search term. */
					esc_html__( '「%s」の検索結果：%d件', 'aadctheme' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>', (int) $the_query->found_posts,
				);
			?>
		</h1>
		<ul class="result">
			<?php
				$count = 0;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
			?>
			<li>
				<a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a>
			</li>
			<?php } ?>
		</ul>
	
	</section>
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
			<li>サイト検索</li>
		</ul>
	</div>
</section>


<?php
get_footer(); ?>