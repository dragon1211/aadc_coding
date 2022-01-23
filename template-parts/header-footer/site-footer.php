<footer class="footer">
	<div class="footer-content">
		<div class="footer-content__left">
			<ul class="link-list">
				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/about" >当院について</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/about/doctor" >ドクター紹介</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/about/news" >ニュースアーカイブ</a></li>

				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/eom" >エステティックオルソメソッド（EOM）</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/shinbi" >前歯審美歯科治療</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/crown-bridge-inray" >セラミッククラウン ・ジルコニアクラウン</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/lumineers" >ルミネアーズ</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/whitening" >ホワイトニング</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/non-extraction" >歯を抜かない矯正治療</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/orthodontic" >前歯部分矯正</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/invisalign" >インビザライン・マウスピース矯正</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/eom/gap" >すきっ歯専門治療</a></li>
			</ul>
			<ul class="link-list">
				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/anti-aging" >アンチエイジング</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/teeth-cleaning" >クリーニング</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/gum-care" >歯周病治療・歯肉ケア</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/grinding" >歯ぎしり・食いしばり治療</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/metal-free" >メタルフリー治療</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/implant" >インプラント</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/anti-aging-dock" >アンチエイジング検査</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/injection" >点滴療法・注射</a></li>
				<li class="link-list__item">      <a class="item-link" href="<?php echo home_url(); ?>/anti-aging/esthetic" >デンタルエステ</a></li>

				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/general" >一般歯科</a></li>

				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/information" >インフォメーション・アクセス</a></li>
				<li class="link-list__item bold"> <a class="item-link" href="<?php echo home_url(); ?>/price" >料金表</a></li>
				<li class="link-list__item bold"> <a class="item-link" href="<?php echo home_url(); ?>/appointment" >診療予約</a></li>
				<li class="link-list__item bold"> <a class="item-link" href="<?php echo home_url(); ?>/inquiry" >お問い合わせ</a></li>
				<li class="link-list__item bold"> <a class="item-link" href="<?php echo home_url(); ?>/en" >English</a></li>
			</ul>
			<ul class="link-list">
				<li class="link-list__item title"><a class="item-link" href="<?php echo home_url(); ?>/aadcblog" >Dr.OGAWAブログ</a></li>

				<?php 
					$category = get_the_category();
					if($category){
						$cat_name = $category[0]->cat_name;
						$cat_slug = $category[0]->category_nicename;
					}

					$categories = get_categories( [
						'taxonomy'     => 'category',
						'type'         => 'post',
						'child_of'     => 0,
						'parent'       => get_cat_ID('aadcblog'),
						'orderBy'      => 'order',
						'order'        => 'ASC',
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => 0,
						'pad_counts'   => false,
						// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
					] );

					if(count($categories) > 0) {
						foreach($categories as $cat){
				?>
					<li class="link-list__item">
						<a class="item-link" href="<?php echo home_url()."/category/aadcblog/".$cat->slug; ?>">
							<?php echo $cat->name; ?>
						</a>
					</li>

				<?php } } else ;?>
			</ul>
		</div>

		<div class="footer-content__right">
			<div>
				<a class="footer-btn-link" href="<?php echo home_url(); ?>/appointment">診療予約・矯正無料相談 <span>▶︎</span></a>
				<a class="footer-btn-link" href="<?php echo home_url(); ?>/inquiry">お問い合わせ <span>▶︎</span></a>
	
				<div class="icon-bar">
					<a class="icon-img__link" href="https://www.facebook.com/aadc.ebisu?fref=ts"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-facebook.svg" alt="icon"></a>
					<a class="icon-img__link" href="https://www.instagram.com/antiaging_dental_ebisu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-instagram.svg" alt="icon"></a>
					<a class="icon-img__link" href="<?php echo home_url(); ?>/aadcblog"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-blog.svg" alt="icon"></a>
				</div>
			</div>

			<div class="footer-content__text-wrap">
				<p class="title">アンチエイジングデンタルクリニック恵比寿<p>
				<p>〒150-0021 東京都渋谷区恵比寿西1-4-1 VANDAビル2F</p>
				<p class="tel">Tel. <span>03-5459-3163</span></p>
				<p class="mgt-40">ＪＲ 山手線恵比寿駅西口 徒歩2分<br>
					東京メトロ 日比谷線2番出口 徒歩2分
				</p>
			</div>
		</div>
	</div>
	<div class="footer-bottom">© Anti-aging Dental Clinic Ebisu</div>
</footer>

<div class="page-top js-pageTop"><span></span></div>