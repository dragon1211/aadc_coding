<?php get_template_part( 'template-parts/sub-nav/aadcblog-sub-nav' ); ?>


<!-- news-content -->
<section class="news-content">
	<div class="news-container">
		<div class="news-wrapper">
			<ul class="news-list">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type'=> 'ogawablog',
						'post_status' => 'publish',
						'order'    => 'DESC',
						'posts_per_page' => PAGE_NAVI_NUM, // this will retrive all the post that is published ,
						'paged' => $paged
					);
						
					$result = new WP_Query( $args );
					
					set_query_var('page',$paged);

					if ( $result-> have_posts() ) : {
						while ( $result->have_posts() ){
							$result->the_post(); 
							get_template_part( 'template-parts/post/item' );
						}
					}
				?>
			</ul>

			<div class="pagination">
				<?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $result)); ?>
				<?php endif; wp_reset_postdata(); ?>   
			</div>
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
			<li>Dr.Ogawa Blog</li>
		</ul>
	</div>
</section>
