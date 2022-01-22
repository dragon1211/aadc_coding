<section class="home-notice">
	<div class="home-notice__wrapper">
		<nav class="home-notice__nav">
			<ul class="nav-main"><a href="<?php echo home_url(); ?>/information">インフォメーション</a></ul>
		</nav>
	</div>
</section>


<!-- information-section -->
<section class="content">
    <!-- header -->
	<div class="information-header">
		<h1 class="head f42">Information</h1>
	</div>

	<!-- information -->
	<section class="information-section">
		<div class="information-wrap">
			<div class="info-left">
				<p class="info-left-txt f20">診療予約</p>
				<p class="info-left-tel f28"><a href="tel:0354593163">TEL. 03-5459-3163</a></p>
				<p class="info-left-appoint-btn f18"><a href="<?php echo home_url(); ?>/appointment/">診療予約・矯正無料相談</a></p>
				<p class="info-left-time f16">午前の部：10:00〜13:00<br>午後の部：14:30〜19:00（月：14:30〜20:00）<br>休診日：日曜・祝日<br>各種健康保険取り扱い</p>
				<p class="info-left-name f18">アンチエイジング<br class="sp-onlyt">デンタルクリニック恵比寿</p>
				<p class="info-left-add f16">〒150-0021　東京都渋谷区<br class="sp-onlyt">恵比寿西1-4-1 VANDAビル2F</p>
				<p class="info-left-train f14">ＪＲ 山手線恵比寿駅西口　<br class="sp-onlyt">東京メトロ 日比谷線2番出口　徒歩2分</p>
			</div>
			<div class="info-right">
				<?php dynamic_sidebar('Widget-BizCalendar'); ?>
				<div class="cal-detai f12"><span class="red">赤</span>休診日　<span class="blue">青</span>延長診療日</div>
			</div>
		</div>


		<div class="information-map">
			<iframe	src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sja!2sjp!4v1459310870757
				!6m8!1m7!1sOLOJZwjgabkAAAQvOnFj4w!2m2!1d35.64880329395086!2d139.707947634886
				5!3f348.9366225340776!4f-0.5399906886473076!5f0.7875008490197288"
				width="100%" height="450" frameborder="0" style="border:0"
				allowfullscreen>
			</iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1621.0801746695818!2d139.70738047712533!3d35.648420799980855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x843ec121ff198ce5!2z44Ki44Oz44OB44Ko44Kk44K444Oz44Kw44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv5oG15q-U5a-_5q2v56eR772c5oG15q-U5a-_6aeF!5e0!3m2!1sja!2sjp!4v1534853743689" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>			
		
		<div class="info">
			<h2 class="sub-head f28">各種健康保険取り扱い</h2>
			<p class="sub-head f24">自由診療のお支払いについて</p>
			<div class="sub-intro f16">当院では、自由診療分のお支払いは現金のほか、各種クレジットカードとデンタルローンがご利用いただけます。<br>
				患者様のご都合に合わせて治療費の分割払いにも対応させていただいておりますのでご相談ください。
			</div>			
			<p class="sub-head f24">クレジットカードによるお支払い</p>
			<div class="sub-intro f16">
				自由診療分に限り各種クレジットカードをご利用いただけます。<br>クレジットカードの規約に準じ、分割払いやボーナス一括払いも承っております。
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/base/creditcard-mark.png" class="creditcard-mark">
			</div>
			
			<p class="sub-head f24">デンタルローンによるお支払い</p>
			<p class="sub-intro f16">デンタルローンとは、歯科治療専用のローンのことです。<br>
				保険の効かない、矯正治療や審美治療、インプラント、義歯など自費の治療費を分割払いでご負担なく支払うことが可能です。<br>
				ご都合に合わせて分割回数や月々の支払額も設定できるうえ、面倒な審査もスマホやPCから簡単に行えます。<br>
				なお、デンタルローンを利用した場合でも、医療費控除の申請ができますので、ご安心ください。<br>
				当院では新生銀行グループアプラスのデンタルローンを取り扱っています。</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/base/aplus-credit.png" class="aplus-credit">
			<ul class="aplus-merit f16">
				<li>実質年率が５．８％で、クレジットカードの分割払いよりも金利が安い</li>
				<li>その場ですぐに審査が可能で、原則的にWEBによる申し込みから10分程度で回答ができる</li>
				<li>分割回数が最大84回のため、無理なく返済ができる</li>
				<li>最低3万円から利用でき、上限が500万と利用額の幅が大きい</li>
				<li>収入証明や連帯保証人が必要なく、手続きが面倒でない。</li>
			</ul>
			<div class="aplus-link f16"><a href="http://www.aplus.co.jp/go/d/" target="_blank">デンタルローンのお申し込みはこちらへ</a></div>
			<div class="aplus-link end f16"><a href="http://www.chinaleadershiptransition.com/%E3%82%A2%E3%83%97%E3%83%A9%E3%82%B9%E3%83%87%E3%83%B3%E3%82%BF%E3%83%AB%E3%83%AD%E3%83%BC%E3%83%B3/" target="_blank">デンタルローンについてはこちらへ</a></div>
			<p class="sub-head f24">医療費控除について</p>
			<p class="sub-intro f16">歯科診療で10万円を越える治療費をお支払いの方は、
				確定申告の際の対象となり税金が一部戻ってくる制度です。<br>
				医療費控除を受けるための手続きは医療費控除に関する事項を記載した確定申告書を提出してください。<br>
				提出の際には医療費の支出を証明する書類として、領収書などが必要となりますので、保管するようお願いいたします。
			</p>	
		</div>
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
			<li>インフォメーション</li>
		</ul>
	</div>
</section>
