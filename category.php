<?php get_header(); ?>



	<!-- contents -->
	<div class="contents">


		<?php $category = get_the_category();
						$cat_name = $category[0]->cat_name;
						$cat_slug = $category[0]->category_nicename; ?>
		<!-- header -->
		<header class="blog-header">
			<h1 class="head l6">AA歯科恵比寿の院長Dr小川ブログ ｰ <?php echo $cat_name; ?></h1>
		</header>
		<!-- /header -->
		
		
		
		<!-- message -->
		<section class="blog-section">
			<ul>
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php echo $cat_slug; ?>/" class="cate">
						<div class="category s2 <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
					</a>
					<a href="<?php the_permalink(); ?>" class="posts">
						<div class="date s2">
							<?php
								$days = 7;
								$today = date('U');
								$date = get_the_time('U');
								$period = date('U', ($today - $date)) / 86400;
							?>
							<?php if ($days > $period){; ?>
							<span class="badge s2">NEW</span>
							<?php }; ?>
							<?php echo get_the_date('Y年n月j日'); ?>
						</div>
						<h2 class="head m"><?php echo mb_substr(strip_tags($post-> post_title),0,15); ?></h2>
						<div class="comment s"><?php echo mb_substr(strip_tags($post-> post_content),0,180).'<br><span>...もっと見る</span>'; ?></div>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>
			<div class="list-link s">
				<a href="<?php site_url(); ?>/aadcblog/">ブログ一覧に戻る</a>
			</div>
		</section>
		<!-- /message -->




<?php get_footer(); ?>