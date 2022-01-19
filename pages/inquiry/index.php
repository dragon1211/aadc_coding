<!-- inquiry-section -->
<section class="content">
	<div class="inquiry-header">
		<h1 class="head f20">お問い合わせ</h1>
	</div>

	<section class="inquiry-section">
		
		<h2 class="head f24">お電話によるお問い合わせ</h2>
		<div class="detail f36">03-5459-3163</div>
		
		<h2 class="head f24">メールによるお問い合わせ</h2>
		<div class="detail f16">個人情報の取り扱いについてご同意いただける方のみ、以下のフォームにお進みください。</div>
		
		<div class="privacy f14">
			<span>個人情報の取り扱いについて</span>
			アンチエイジングデンタルクリニック恵比寿は、業務上でお客さまの個人情報を取り扱うにあたって、適正な管理・保護に努めることが社会的責務であることを十分に認識し、以下の「個人情報保護方針」を定め実践していくことでお客さまやの信頼に応えてまいります。<br>
			<br>
			【個人情報保護方針】<br>
			個人情報を提供していただく際には、その利用目的を明らかにしてご本人の同意を得ることとし、同意いただいた目的以外には利用いたしません。<br>ご提供いただいた個人情報は、不正アクセス、紛失、破壊、改ざん、漏えい等を防止するための適切な措置を講じ、厳正に管理いたします。
			<br>個人情報の保護に関する法令および行政機関等が定めた規範を遵守いたします。
			<br>上記各項における取組みを必要に応じて見直し、改善してまいります。 
		</div>
		
		<form id="mailform" action="<?php echo get_template_directory_uri(); ?>/mailform/send.cgi" method="post" onsubmit="return sendmail(this);">
		<table class="mailform f16" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th>メールアドレス<span>*</span><p>e-mail address</p></th>
					<td><input class="mf" type="text" name="email(必須)" size="50"></td>
				</tr>
				<tr>
					<th>確認用メールアドレス<span>*</span><p>e-mail address</p></th>
					<td><input class="mf" type="text" name="confirm_email" size="50"></td>
				</tr>
				<tr>
					<th>お名前<span>*</span><p>your name</p></th>
					<td><input class="nm" type="text" name="お名前(必須)" size="50"></td>
				</tr>
				<tr>
					<th>ご用件<span>*</span><p>inquiry body</p></th>
					<td><textarea name="ご用件(必須)" rows="10" cols="70"></textarea></td>
				</tr>
				<tr>
					<th><span>*</span>は必須項目です。</th>
					<td>
						<input class="submit_button" type="submit" value="メールを送信する">
						<input class="reset_button" type="reset" name="reset" value="リセット" />
					</td>
				</tr>
			</tbody>
		</table>
		</form>
		<form id="mailform" action="<?php echo get_stylesheet_directory_uri(); ?>/mailform/send.cgi" method="post" onsubmit="return sendmail(this);">
		<table class="mailform sp f16" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th>メールアドレス<span>*</span><p>e-mail address</p></th>
				</tr>
				<tr>
					<td><input class="mf" type="text" name="email(必須)" size="40"></td>
				</tr>
				<tr>
					<th>確認用メールアドレス<span>*</span><p>e-mail address</p></th>
				</tr>
				<tr>
					<td><input class="mf" type="text" name="confirm_email" size="40"></td>
				</tr>
				<tr>
					<th>お名前<span>*</span><p>your name</p></th>
				</tr>
				<tr>	
					<td><input class="nm" type="text" name="お名前(必須)" size="40"></td>
				</tr>
				<tr>
					<th>ご用件<span>*</span><p>inquiry body</p></th>
				</tr>
				<tr>	
					<td><textarea name="ご用件(必須)" rows="10" cols="40"></textarea></td>
				</tr>
				<tr>
					<th><span>*</span>は必須項目です。</th>
				</tr>
				<tr>
					<td class="submit_wrap">
						<input class="submit_button" type="submit" value="メールを送信する" />
						<input class="reset_button" type="reset" name="reset" value="リセット" />
					</td>
				</tr>
			</tbody>
		</table>
		</form>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/mailform/mailform.js"></script>		
	
	</section>
</section>
<!-- /inquiry-section -->


<!-- breadcrumb section -->
<section class="breadcrumb-wrapper">
	<div class="breadcrumb-wrapper__content">
		<ul class="breadcrumb">
			<li>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
				</a>
			</li>
			<li>お問い合わせ</li>
		</ul>
	</div>
</section>