<!-- english-section -->
<section class="content">
	<!-- eng header -->
	<div class="eng-header">
		<h1 class="head f24">Contact Us</h1>
	</div>

	<!-- eng contact -->
	<section class="contact-section">
		<h2 class="head f24">Send completed!</h2>
		<p class="contact f16">
			Thank you for looking our Anti-aging dental clinic Ebisu website. <br>
			The contents were our inquiry, we will contact you from the person in charge. <br>
			If there is no reply within a few days after the transmission, very excuse me, please give me a call directly.
		</p>
		<form id="mailform" action="<?php echo get_stylesheet_directory_uri(); ?>/mailform_e/send.cgi" method="post" onsubmit="return sendmail(this);">
		<table class="mailform f16" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th>Email<span>*</span></th>
					<td><input class="mf" type="text" name="email(必須)" size="50"></td>
				</tr>
				<tr>
					<th>Confirm Email<span>*</span></th>
					<td><input class="mf" type="text" name="confirm_email" size="50"></td>
				</tr>
				<tr>
					<th>Your name<span>*</span></th>
					<td><input class="nm" type="text" name="Your name(必須)" size="50"></td>
				</tr>
				<tr>
					<th>inquiry<span>*</span></th>
					<td><textarea name="Inquiry(必須)" rows="10" cols="70"></textarea></td>
				</tr>
				<tr>
					<th><span>*</span>Required</th>
					<td>
						<input class="submit_button" type="submit" value="Submit">
						<input class="reset_button" type="reset" name="reset" value="Reset" />
					</td>
				</tr>
			</tbody>
		</table>
		</form>
		<form id="mailform" action="<?php echo get_stylesheet_directory_uri(); ?>/mailform_e/send.cgi" method="post" onsubmit="return sendmail(this);">
		<table class="mailform sp f16" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th>Email<span>*</span></th>
				</tr>
				<tr>
					<td><input class="mf" type="text" name="email(必須)" size="40"></td>
				</tr>
				<tr>
					<th>Confirm Email<span>*</span></th>
				</tr>
				<tr>
					<td><input class="mf" type="text" name="confirm_email" size="40"></td>
				</tr>
				<tr>
					<th>Your name<span>*</span></th>
				</tr>
				<tr>	
					<td><input class="nm" type="text" name="Your name(必須)" size="40"></td>
				</tr>
				<tr>
					<th>inquiry<span>*</span></th>
				</tr>
				<tr>	
					<td><textarea name="Inquiry(必須)" rows="10" cols="40"></textarea></td>
				</tr>
				<tr>
					<th><span>*</span>Required</th>
				</tr>
				<tr>
					<td class="submit_wrap">
						<input class="submit_button" type="submit" value="Submit" />
						<input class="reset_button" type="reset" name="reset" value="Reset" />
					</td>
				</tr>
			</tbody>
		</table>
		</form>
		<script charset="utf-8" type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/mailform_e/mailform.js"></script>
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
			<li>English</li>
		</ul>
	</div>
</section>

	