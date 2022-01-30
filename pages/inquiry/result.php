<!-- inquiry-section -->
<section class="content">
	<!-- header -->
	<div class="inquiry-header">
		<h1 class="head f20">お問い合わせ</h1>
	</div>

	<!-- body -->
	<section class="inquiry-section">
		<h2 class="head f24">お問い合わせ送信完了</h2>
		
		<p class="contact-result f16">
			この度は、アンチエイジングデンタルクリニック恵比寿のサイトをご利用いただき、誠にありがとうございます。<br>
			お問い合わせいただきました内容については、担当者よりご連絡申し上げます。<br>
			なお、送信後数日以内に返信メールが無い場合は、大変恐れ入りますが、 直接お電話（<strong style="color:#d93600">03-5459-3163</strong>）または下記フォームより再度お問い合わせください。
		</p>
		
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


<!-- breadcrumb -->
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