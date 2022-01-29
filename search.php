<?php get_header(); ?>
	
<main class="main">
<!-- inquiry-section -->
<section class="content">
	<!-- header -->
	<div class="inquiry-header">
		<h1 class="head f20">サイト検索</h1>
	</div>
	<?php get_search_form(); ?>
	<!-- body -->
	<section class="search-result-section">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
		<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		// get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
		the_title();
	} // End the loop.

	// Previous/next page navigation.
	// twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
	?>
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