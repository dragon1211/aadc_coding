<?php get_header(); ?>
	
	<main class="main" role="main">
	
		<section class="home-notice">
			<div class="home-notice__wrapper">
				<a href="<?php echo home_url(); ?>/coronavirus-information" class="home-notice__covid19">当院では新型コロナウイルスの感染対策を強化しています</a>
			</div>
		</section>
		
		<section class="home-mainvisual">
			<div class="home-mainvisual__wrapper">
				<h2 class="home-mainvisual__heading">Smile<span>笑顔 ＝ 歯 ＋ アンチエイジング</span></h2>
				<a href="<?php echo home_url(); ?>/appointment" class="home-mainvisual__reserve">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/reserved.png" alt="aadc">
				<span>診療予約<br>無料相談</span>
				</a>
			</div>
		</section>

		
		<section class="home-news">
			<div class="home-news__wrapper">
				<h2 class="home-news__heading">What's New</h2>
				<div class="home-news__contentsWrapper">
					<div class="home-news__list">
						<div class="swiper-container">
							<div class="swiper-wrapper">

								<?php query_posts('posts_per_page=10&category_name=news&order=DESC'); ?>
								<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="swiper-slide">
									<?php get_template_part( 'template-parts/post/item' ); ?>
								</div>
								
								<?php endwhile; endif; ?>
							</div>
							<div class="swiper-pagination sp-only"></div>
						</div>
						<div class="swiper-button-next pc-only"></div>
						<div class="swiper-button-prev pc-only"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="home-content">
			
			<div class="home-content__wrapper">
				<div class="home-content__eom">
					<h2 class="home-content__heading eom">白くきれいな歯と<br class="sp-only">美しい口元
						<a href="<?php echo home_url(); ?>/eom/crown-bridge-inray">セラミック治療について</a>
					</h2>
				</div>
			</div>
			
			<div class="home-content__wrapper">
				<div class="home-content__invisalign">
					<div class="home-content__invisalign-wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top/invisalign-logo.png" alt="adbc">
						<h2 class="home-content__heading">透明で目立ちにくい<br class="sp-only">マウスピース矯正
							<a href="<?php echo home_url(); ?>/eom/invisalign/">インビザラインについて</a>
						</h2>
					</div>
				</div>
			</div>
				
			<div class="home-content__wrapper">
				<div class="home-content__alignment">
					<h2 class="home-content__heading alignment">きれいな歯並びで質の高い生活を
						<a href="<?php echo home_url(); ?>/eom/non-extraction">矯正歯科治療について</a>
					</h2>
				</div>
			</div>
			
			<div class="home-content__wrapper">
				<div class="home-content__blog">
					<h2 class="home-content__heading blog">Dr.Ogawa Blog
						<a href="<?php echo home_url(); ?>/aadcblog">院長ブログ</a>
					</h2>
				</div>
			</div>
			
		</section>
		
		<section class="home-outline">
			<div class="home-outline__heading-wrap">
				<h2 class="home-outline__heading">
					ひとりひとりに<br class="sp-onlyt">丁寧な診療を
					<a href="<?php echo home_url(); ?>/about" class="sp-onlyt">当院についてはこちら</a>
				</h2>
			</div>
			<div class="home-container">
				<div class="home-outline__copy">当院では、患者様一人一人のニーズにお応えできるよう、<br>
					歯科治療とアンチエイジング医療も含めた総合的な診療を行なっております。<br>
					確かな技術提供を第一に、通院満足度の高い環境作りとホスピタリティにあふれた患者様対応ができるよう、スタッフ一同努めております。<br>
					丁寧な診療を日々心がけ、患者様がご不安なくお過ごし頂けるよう、さまざまな配慮をいたしております。<br>
					<a href="<?php echo home_url(); ?>/about" class="pc-onlyt">当院についてはこちら</a>
				</div>
				<ul class="home-outline__list">
					<li>カウンセリング時間を十分に取り　患者様のお悩みとご要望に最適なご提案をいたします</li>
					<li>来院の都度　患者様がご不安なく治療を受けて頂けるよう丁寧な説明を心がけております</li>
					<li>痛くなく　体に負担の少ない最新機器と技術を用いて診療を行なっています</li>
					<li>院内感染防止に十分に留意し　常に清潔で衛生的な環境を保つよう努めています</li>
					<li>プライバシーを考慮し　診療室は個室３部屋をご用意しております</li>
					<li>通院回数を減らし　患者様の時間的軽減ができるよう短期集中治療も行なっております</li>
					<li>アロマセラピーを各所に取り入れて　歯科医院独特のストレスを軽減しています</li>
				</ul>
			</div>
		</section>

		<section class="home-section">
			<div class="home-section__wrapper">
				<h2 class="home-section__heading">ESTHETIC DENTAL CURE</h2>
				<div class="home-section__read">歯をきれいに美しく　機能美を追求し<br>
					健康な天然歯の状態に最大限近づけます<br>
					さらに歯並びや歯の色　形や噛み合わせなど機能と<br>
					見た目を総合的に見て<br>
					より美しい口もとを患者様とともに達成します
				</div>
				<div class="home-section__wrap">
					<div class="home-section__wrap__eom">
						<h2 class="home-section__wrap__eom-heading">
							<span >エステティック<br class="sp-only2">オルソメソッド(EOM)で</span>
							<span>美しい歯をいつまでも</span>
							<a href="<?php echo home_url(); ?>/eom/">
								<span>エステティック<br class="sp-only2">オルソメソッドについて</span>
							</a>
						</h2>
					</div>
					<ul class="home-section__menu-ul">
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/shinbi">前歯審美歯科治療</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/crown-bridge-inray">セラミッククラウン<br>ジルコニアクラウン</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/lumineers">ルミネアーズ</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/whitening">ホワイトニング</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/non-extraction">歯を抜かない矯正治療</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/orthodontic">前歯部分矯正</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/invisalign">インビザライン<br>マウスピース矯正</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/eom/gap">すきっ歯専門治療</a></li>
					</ul>
				</div>
			</div>
			<div class="home-section__wrapper">
				<div class="home-container">
					<h2 class="home-section__heading">DENTAL ANTIAGING</h2>
					<div class="home-section__read">歯と歯肉の健康を保ち　噛む機能を向上させ<br>
						不調のないお口で毎日を過ごすことを目的とします<br>
						体の内側からも健康状態をフォローし<br>
						お口と全身のアンチエイジングを目指しましょう
					</div>
				</div>
				<div class="home-section__wrap">
					<div class="home-section__wrap__antiaging">
						<h2 class="home-section__wrap__antiaging-heading">歯科で行う<br class="sp-only2">アンチエイジング
							<a href="<?php echo home_url(); ?>/anti-aging/">アンチエイジングについて</a>
						</h2>
					</div>
					<ul class="home-section__menu-ul">
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/teeth-cleaning">クリーニング</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/gum-care">歯周病治療<br>歯肉ケア</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/grinding">歯ぎしり<br>食いしばり治療</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/metal-free">メタルフリー治療</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/implant">インプラント</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/anti-aging-dock">アンチエイジング検査</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/injection">点滴療法・注射<br>サプリメント</a></li>
						<li class="home-section__menu-ul__list"><a href="<?php echo home_url(); ?>/anti-aging/esthetic">デンタルエステ</a></li>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="home-reservation">
			<div class="home-container">
				<h2 class="home-reservation__heading">RESERVATION</h2>
				<h3 class="home-reservation__sub-heading">診療予約・矯正無料相談</h3>
				<div class="home-reservation__text-read">
					<p>
						当院では、一人一人の患者様の治療を安心安全に円滑に行うために診療時間を予約制にさせて頂いております。<br>
						それにより患者様の貴重なお時間を無駄にしないようスタッフ一同で日々努めております。<br>
						患者様に、予約について当院からのお願いがありますのでご一読頂きご理解ご協力頂けますようよろしくお願い致します。
					</p>	
				</div>
				<a href="<?php echo home_url(); ?>/appointment" class="submit">今すぐ予約をする</a>
				<h3 class="home-reservation__tel-heading">お電話でのご予約・ご相談はこちらから</h3>
				<div class="home-reservation__tel-body">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-phone-main.svg" alt="adbc">
					<span>03-5459-3163</span>
				</div>
				<p class="home-reservation__period">
					10:00–19:00<br class="sp-onlyt">（月曜日は20:00まで。日曜・祝日は除く）
				</p>
			</div>
		</section>

		<section class="home-information">
			<h2 class="home-reservation__heading">INFORMATION</h2>
			<div class="home-information__pane">
				<div class="home-information__pane-left">
					<h2 class="home-information__heading">アンチエイジングデンタル<br class="sp-only">クリニック恵比寿</h2>
					<a href="<?php echo home_url(); ?>/appointment" class="home-information__btn">診療予約・矯正無料相談</a>
					<p class="text1">電話でのお問い合わせ</p>
					<div class="tel">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-phone-main.svg" alt="adbc">
						<span>03-5459-3163</span>
					</div>
					<p class="text2">
						午前の部：10:00−13:00<br>
						午後の部：14:30−19:00（月：14:30−20:00）<br>
						休診日：日曜・祝日 <br>
						各種健康保険取り扱い 
					</p>
					<p class="text3">
						〒150-0021　東京都渋谷区恵比寿西1-4-1　<br class="sp-only">VANDAビル2F<br><br class="sp-only">
						ＪＲ 山手線恵比寿駅西口 徒歩2分<br>
						東京メトロ 日比谷線2番出口 徒歩2分
					</p>
				</div>
				<div class="home-information__pane-right">
					<h2 class="home-information__heading">SCHEDULE</h2>
					<a href="<?php echo home_url(); ?>/information" class="home-information__btn">クリニック診療カレンダー</a>
					<table class="table-calendar">
					   <thead>
						   	<td></td>
							<td>日</td>
							<td>月</td>
							<td>火</td>
							<td>水</td>
							<td>木</td>
							<td>金</td>
							<td>土</td>
					   </thead>
					   <tbody>
						   <tr>
								<td>10:00ー13:00</td>
								<td></td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
								<td>△</td>
								<td>○</td>
								<td>○</td>
						   </tr>
						   <tr>
								<td>14:30ー19:00</td>
								<td></td>
								<td>●</td>
								<td>○</td>
								<td>○</td>
								<td>△</td>
								<td>○</td>
								<td>○</td>
						   </tr>
					   </tbody>
					</table>
					<p class="text3">
						●：延長診療　午後の部は14:30ー20:00まで<br>
						△：院長不在日<br>
						日曜・祝日は休診日となります
					</p>
				</div>
			</div>
		</section>

		<section class="home-map">
			<iframe 
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1621.0801746695818!2d139.70738047712533!3d35.648420799980855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x843ec121ff198ce5!2z44Ki44Oz44OB44Ko44Kk44K444Oz44Kw44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv5oG15q-U5a-_5q2v56eR772c5oG15q-U5a-_6aeF!5e0!3m2!1sja!2sjp!4v1534853743689" 
				width="100%" height="600" 
				frameborder="0" style="border:0" 
				allowfullscreen>
			</iframe>
		</section>
		
	</main>
	
<?php get_footer(); ?>	