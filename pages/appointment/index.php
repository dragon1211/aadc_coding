<main class="main">


    <!-- appoinment-content -->
    <section class="content">

		<div class="appointment-header">
			<h1 class="head f20">診療予約・矯正無料相談</h1>
		</div>

	<!-- appointment-section -->
		<section class="appointment-section">
						
			<h2 class="head f30">診療予約・矯正無料相談<br class="sp-onlyt">仮予約フォーム</h2>
			<div class="detail f18">個人情報の取り扱いについてご同意いただける方のみ、以下のフォームにお進みください。</div>
			<div class="privacy f16">
				<span>個人情報の取り扱いについて</span>
				アンチエイジングデンタルクリニック恵比寿は、業務上でお客さまの個人情報を取り扱うにあたって、適正な管理・保護に努めることが社会的責務であることを十分に認識し、以下の「個人情報保護方針」を定め実践していくことでお客さまやの信頼に応えてまいります。<br>
				<br>
				【個人情報保護方針】<br>
				個人情報を提供していただく際には、その利用目的を明らかにしてご本人の同意を得ることとし、同意いただいた目的以外には利用いたしません。<br>ご提供いただいた個人情報は、不正アクセス、紛失、破壊、改ざん、漏えい等を防止するための適切な措置を講じ、厳正に管理いたします。
				<br>個人情報の保護に関する法令および行政機関等が定めた規範を遵守いたします。
				<br>上記各項における取組みを必要に応じて見直し、改善してまいります。 
			</div>
			
			<ul class="detail f16">
				<li>初診の方の最終予約受付時間は月・木は19時、火・水・金・土は18時になります。</li>
				<li>当日、前日の予約は、取りづらい場合がございますので、５日程度の余裕を持ってご予約頂きますようお願い致します。
				お急ぎの場合はお電話にてご連絡ください。</li>
				<li>希望日時が休診時間帯と重なっていないかご確認ください。</li>
				<li>ご希望の日時に沿えない場合もございますので予めご了承ください。</li>
				<li>メールフォームからのご予約は、仮予約とさせて頂いております。
				メールを確認後当院から予約確認のご連絡をさせて頂いておりますが、返信に最大３営業日かかることもございますので、
				お急ぎの方はお電話にてご予約ください。</li>
			</ul>
			
			<form id="mailform" action="<?php echo get_stylesheet_directory_uri(); ?>/appoint/send.cgi" method="post" onsubmit="return sendmail(this);">
			<table class="appointform f18" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<th>ご予約について<span>*</span><p>reservation</p></th>
						<td class="radioform">
							<input type="radio" id="radio1" name="ご予約について(必須)" value="初めて"/><label for="radio1">初めて</label>
							<input type="radio" id="radio2" name="ご予約について(必須)" value="再診" /><label for="radio2">再診</label>
							<input type="radio" id="radio3" name="ご予約について(必須)" value="定期検診" /><label for="radio3">定期検診</label>
							<input type="radio" id="radio4" name="ご予約について(必須)" value="矯正無料相談" /><label for="radio4">矯正無料相談</label>
							<input type="radio" id="radio5" name="ご予約について(必須)" value="審美治療相談" /><label for="radio5">審美治療相談</label>
							<p class="comment f14">矯正無料相談・審美治療無料相談はドクターによるカウンセリング３０分となります。（初回に限らせて頂きます）</p>
						</td>
					</tr>
					<tr>
						<th>ご希望の診療内容<p>treatment</p></th>
						<td class="checkbox">
							<input class="cb" type="checkbox" id="checkbox0" name="ご希望の診療内容" value="一般歯科治療"><label for="checkbox0">一般歯科治療</label>
							<input class="cb" type="checkbox" id="checkbox1" name="ご希望の診療内容" value="審美治療"><label for="checkbox1">審美治療</label>
							<input class="cb" type="checkbox" id="checkbox2" name="ご希望の診療内容" value="矯正治療"><label for="checkbox2">矯正治療</label>
							<input class="cb" type="checkbox" id="checkbox3" name="ご希望の診療内容" value="検診"><label for="checkbox3">検診</label>
							<input class="cb" type="checkbox" id="checkbox4" name="ご希望の診療内容" value="クリーニング"><label for="checkbox4">クリーニング</label><br>
							<input class="cb" type="checkbox" id="checkbox5" name="ご希望の診療内容" value="アンチエイジング・点滴"><label for="checkbox5">アンチエイジング・点滴</label>
							<input class="cb" type="checkbox" id="checkbox6" name="ご希望の診療内容" value="その他"><label for="checkbox6">その他</label>
						</td>
					</tr>
					<tr>
						<th>診察券番号<p>card number</p></th>
						<td>
							<input class="cn" type="text" name="診察券番号" size="30">
							<p class="comment f14">お持ちの方のみで結構です。</p>
						</td>
					</tr>
					<tr>
						<th>お名前<span>*</span><p>your name</p></th>
						<td><input class="nm" type="text" name="お名前(必須)" size="30"></td>
					</tr>
					<tr>
						<th>フリガナ<p>assumed name</p></th>
						<td><input class="nm" type="text" name="フリガナ" size="30"></td>
					</tr>
					<tr>
						<th>性別<p>sex</p></th>
						<td class="radioform">
							<input type="radio" id="radio01" name="性別" value="女性" /><label for="radio01">女性</label>
							<input type="radio" id="radio02" name="性別" value="男性" /><label for="radio02">男性</label>
						</td>
					</tr>
					<tr>
						<th>年齢<p>age</p></th>
						<td><input class="age" type="text" name="年齢" size="5"></td>
					</tr>
					<tr>
						<th>電話番号<span>*</span><p>telephone number</p></th>
						
						<td>
							<input class="tel" type="text" name="電話番号(必須)" size="30">
							<p class="comment f14">市外局番からハイフンを入れてご記入ください。<br>ご希望の診療内容、日時の確認やご希望日に添えない場合に、お電話させて頂くことがございますので、日中の連絡のつく電話番号のご記入をお願い致します。</p>
						</td>
					</tr>
					<tr>
						<th>メールアドレス<span>*</span><p>e-mail address</p></th>
						<td>
							<input class="mf" type="text" name="email(必須)" size="50" maxlength="50" />
							<p class="comment f14">当院から必ず折り返し確認のご連絡をさせていただきますので、
								日中の連絡のつくメールアドレスの記入をお願い致します。<br>
								携帯のメルアドはドメイン指定受信を解除、
								もしくは a-a-d-c.com の追加をしてください。</p>
						</td>
					</tr>
					<tr>
						<th>確認用メールアドレス<span>*</span><p>e-mail address</p></th>
						<td><input class="mf" type="text" name="confirm_email" size="50" /></td>
					</tr>
					<tr>
						<th>当院からの連絡方法<p>contact</p></th>
						<td class="radioform">
							<input type="radio" name="連絡方法" id="radio10" value="電話" /><label for="radio10">電話</label>
							<input type="radio" name="連絡方法" id="radio11" value="メール" /><label for="radio11">メール</label>
							<input type="radio" name="連絡方法" id="radio12" value="どちらでも" /><label for="radio12">どちらでも</label>
						</td>
					</tr>					
					<tr>
						<th>ご来院希望日時<p>reserved date</p></th>
						<td>
							<div class="reserved">
							第1希望 
							<select name="第1希望月" class="mfp" >
							<option value="" >-</option>
							<option value="1月">1</option>
							<option value="2月">2</option>
							<option value="3月">3</option>
							<option value="4月">4</option>
							<option value="5月">5</option>
							<option value="6月">6</option>
							<option value="7月">7</option>
							<option value="8月">8</option>
							<option value="9月">9</option>
							<option value="10月">10</option>
							<option value="11月">11</option>
							<option value="12月">12</option>
							</select>
							月 
							<select name="第1希望日" class="mfp" >
							<option value="" >-</option>
							<option value="1日">1</option>
							<option value="2日">2</option>
							<option value="3日">3</option>
							<option value="4日">4</option>
							<option value="5日">5</option>
							<option value="6日">6</option>
							<option value="7日">7</option>
							<option value="8日">8</option>
							<option value="9日">9</option>
							<option value="10日">10</option>
							<option value="11日">11</option>
							<option value="12日">12</option>
							<option value="13日">13</option>
							<option value="14日">14</option>
							<option value="15日">15</option>
							<option value="16日">16</option>
							<option value="17日">17</option>
							<option value="18日">18</option>
							<option value="19日">19</option>
							<option value="20日">20</option>
							<option value="21日">21</option>
							<option value="22日">22</option>
							<option value="23日">23</option>
							<option value="24日">24</option>
							<option value="25日">25</option>
							<option value="26日">26</option>
							<option value="27日">27</option>
							<option value="28日">28</option>
							<option value="29日">29</option>
							<option value="30日">30</option>
							<option value="31日">31</option>
							</select>
							日 
							<select name="第1希望時間" class="mfp" >
							<option value="" >-</option>
							<optgroup label="午前">
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							</optgroup>
							<optgroup label="午後">
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							</optgroup>
							</select>
							</div>
							<div class="reserved">
							<input type="hidden" name="来院希望日時・第2希望" />
							第2希望 
							<select name="第2希望月" class="mfp">
							<option value="" >-</option>
							<option value="1月">1</option>
							<option value="2月">2</option>
							<option value="3月">3</option>
							<option value="4月">4</option>
							<option value="5月">5</option>
							<option value="6月">6</option>
							<option value="7月">7</option>
							<option value="8月">8</option>
							<option value="9月">9</option>
							<option value="10月">10</option>
							<option value="11月">11</option>
							<option value="12月">12</option>
							</select>
							月 
							<select name="第2希望日" class="mfp" >
							<option value="" >-</option>
							<option value="1日">1</option>
							<option value="2日">2</option>
							<option value="3日">3</option>
							<option value="4日">4</option>
							<option value="5日">5</option>
							<option value="6日">6</option>
							<option value="7日">7</option>
							<option value="8日">8</option>
							<option value="9日">9</option>
							<option value="10日">10</option>
							<option value="11日">11</option>
							<option value="12日">12</option>
							<option value="13日">13</option>
							<option value="14日">14</option>
							<option value="15日">15</option>
							<option value="16日">16</option>
							<option value="17日">17</option>
							<option value="18日">18</option>
							<option value="19日">19</option>
							<option value="20日">20</option>
							<option value="21日">21</option>
							<option value="22日">22</option>
							<option value="23日">23</option>
							<option value="24日">24</option>
							<option value="25日">25</option>
							<option value="26日">26</option>
							<option value="27日">27</option>
							<option value="28日">28</option>
							<option value="29日">29</option>
							<option value="30日">30</option>
							<option value="31日">31</option>
							</select>
							日 
							<select name="第2希望時間" class="mfp" >
							<option value="" >-</option>
							<optgroup label="午前">
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							</optgroup>
							<optgroup label="午後">
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							</optgroup>
							</select>
							</div>
							<p class="comment-red f14">日曜 祝日は休診です。尚、矯正無料相談の最終受付は17時45分とさせて頂いております。</p>
							<p class="comment f14">当日・前日は予約が取りづらい場合がございますので、
								5日前程度の余裕を持ってご予約いただきますようお願い致します。お急ぎの場合はお電話にてご連絡ください。<br>
								希望日時が医院の休診時間等と重なっていないかご確認ください。<br>
								希望日時に添えない場合もございますので予めご了承ください。</p>
							<br>
							<input name="来院希望日時" id="checkbox10" type="checkbox" value="いつでも構わない">
							<label for="checkbox10">←いつでも構わない方はチェック</label>
							<p class="comment f14">当医院より、空いている日時を追ってお知らせ致します。</p>
						</td>
					</tr>
					<tr>
						<th>郵便番号<p>postcode</p></th>
						<td><input class="zip" type="text" name="郵便番号" size="15" > <input class="zipbtn" type="button" value="〒から住所を自動入力" onclick="mfpc('mailform','郵便番号','住所');" /></td>
					</tr>
					<tr>
						<th>住所<p>address</p></th>
						<td><input class="add" type="text" name="住所" size="70" ></td>
					</tr>
					<tr>
						<th>ご希望・ご質問<p>inquiry body</p></th>
						<td><textarea name="ご希望・ご質問" rows="10" cols="70"></textarea></td>
					</tr>
					<tr>
						<th>アンケート<p>Questionnaire</p></th>
						<td>
							<select name="アンケート">
							<option value="" >当サイトをどこで知りましたか？</option>
							<option value="PCでYahoo">PCでYahoo</option>
							<option value="PCでGoogle">PCでGoogle</option>
							<option value="スマートフォン">スマートフォン</option>
							<option value="審美歯科ネット">審美歯科ネット</option>
							<option value="矯正歯科ネット">矯正歯科ネット</option>
							<option value="その他の情報サイト">その他の情報サイト</option>
							<option value="テレビや雑誌等のメディア">テレビや雑誌等のメディア</option>
							<option value="医院を通りかかって">医院を通りかかって</option>
							<option value="ご紹介">ご紹介</option>
							<option value="その他">その他</option>
							</select><br><br>
							※ご紹介の方は、差し支えなければご紹介者様のお名前をご記入ください。<br><br>
							<input class="nm" type="text" name="紹介者" size="30">
						</td>
					</tr>
					<tr>
						<th><span>*</span>は必須項目です。</th>
						<td class="submit_wrap">
							<input class="submit_button" type="submit" value="予約する" />
							<input class="reset_button" type="reset" name="reset" value="リセット" />
						</td>
					</tr>
				</tbody>
			</table>
			</form>
			
			<form id="mailform" action="<?php echo get_stylesheet_directory_uri(); ?>/appoint/send.cgi" method="post" onsubmit="return sendmail(this);">
			<table class="appointform sp f16" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<th>ご予約について<span>*</span><p>reservation</p></th>
					</tr>
					<tr>
						<td class="radioform">
							<input type="radio" id="radio20" name="ご予約について(必須)" value="初めて" /><label for="radio20">初めて</label>
							<input type="radio" id="radio21" name="ご予約について(必須)" value="再診" /><label for="radio21">再診</label>
							<input type="radio" id="radio22" name="ご予約について(必須)" value="定期検診" /><label for="radio22">定期検診</label><br>
							<input type="radio" id="radio23" name="ご予約について(必須)" value="矯正無料相談" /><label for="radio23">矯正無料相談</label>
							<input type="radio" id="radio24" name="ご予約について(必須)" value="審美治療相談" /><label for="radio24">審美治療相談</label>
							<p class="comment f14">矯正無料相談・審美治療無料相談はドクターによるカウンセリング３０分となります。（初回に限らせて頂きます）</p>
						</td>
					</tr>
					<tr>
						<th>ご希望の診療内容<p>treatment</p></th>
					</tr>
					<tr>
						<td class="checkbox">
							<input type="checkbox" id="checkbox20" name="ご希望の診療内容" value="一般歯科治療"><label for="checkbox20">一般歯科治療</label>
							<input type="checkbox" id="checkbox21" name="ご希望の診療内容" value="審美治療"><label for="checkbox21">審美治療</label>
							<input type="checkbox" id="checkbox22" name="ご希望の診療内容" value="矯正治療"><label for="checkbox22">矯正治療</label><br>
							<input type="checkbox" id="checkbox23" name="ご希望の診療内容" value="検診"><label for="checkbox23">検診</label>
							<input type="checkbox" id="checkbox24" name="ご希望の診療内容" value="クリーニング"><label for="checkbox24">クリーニング</label><br>
							<input type="checkbox" id="checkbox25" name="ご希望の診療内容" value="アンチエイジング・点滴"><label for="checkbox25">アンチエイジング・点滴</label>
							<input type="checkbox" id="checkbox26" name="ご希望の診療内容" value="その他"><label for="checkbox26">その他</label>
						</td>
					</tr>
					<tr>
						<th>診察券番号<p>card number</p></th>
					</tr>
					<tr>
						<td>
							<input class="cn" type="text" name="診察券番号" size="30">
							<p class="comment f14">お持ちの方のみで結構です。</p>
						</td>
					</tr>
					<tr>
						<th>お名前<span>*</span><p>your name</p></th>
					</tr>
					<tr>
						<td><input class="nm" type="text" name="お名前(必須)" size="30"></td>
					</tr>
					<tr>
						<th>フリガナ<p>assumed name</p></th>
					</tr>
					<tr>
						<td><input class="nm" type="text" name="フリガナ" size="30"></td>
					</tr>
					<tr>
						<th>性別<p>sex</p></th>
					</tr>
					<tr>
						<td class="radioform">
							<input type="radio" name="性別" value="女性" id="radio30"/><label for="radio30">女性</label>
							<input type="radio" name="性別" value="男性" id="radio31"/><label for="radio31">男性</label>
						</td>
					</tr>
					<tr>
						<th>年齢<p>age</p></th>
					</tr>
					<tr>
						<td><input class="age" type="text" name="年齢" size="5"></td>
					</tr>
					<tr>
						<th>電話番号<span>*</span><p>telephone number</p></th>
					</tr>
					<tr>
						<td>
							<input class="tel" type="text" name="電話番号(必須)" size="30">
							<p class="comment f14">市外局番からハイフンを入れてご記入ください。<br>ご希望の診療内容、日時の確認やご希望日に添えない場合に、お電話させて頂くことがございますので、日中の連絡のつく電話番号のご記入をお願い致します。</p>
						</td>
					</tr>
					<tr>
						<th>メールアドレス<span>*</span><p>e-mail address</p></th>
					</tr>
					<tr>
						<td>
							<input class="mf" type="text" name="email(必須)" size="40" maxlength="50" />
							<p class="comment f14">当院から必ず折り返し確認のご連絡をさせていただきますので、
								日中の連絡のつくメールアドレスの記入をお願い致します。<br>
								携帯のメルアドはドメイン指定受信を解除、
								もしくは a-a-d-c.com の追加をしておいてください。</p>
						</td>
					</tr>
					<tr>
						<th>確認用メールアドレス<span>*</span><p>e-mail address</p></th>
					</tr>
					<tr>
						<td><input class="mf" type="text" name="confirm_email" size="40" /></td>
					</tr>
					<tr>
						<th>当院からの連絡方法<p>contact</p></th>
					</tr>
					<tr>
						<td class="radioform">
							<input type="radio" name="連絡方法" id="radio40" value="電話" /><label for="radio40">電話</label>
							<input type="radio" name="連絡方法" id="radio41" value="メール" /><label for="radio41">メール</label>
							<input type="radio" name="連絡方法" id="radio42" value="どちらでも" /><label for="radio42">どちらでも</label>
						</td>
					</tr>					
					<tr>
						<th>ご来院希望日時<p>reserved date</p></th>
					</tr>
					<tr>
						<td>
							<div class="reserved">
							第1希望 
							<select name="第1希望月" class="mfp" >
							<option value="" >-</option>
							<option value="1月">1</option>
							<option value="2月">2</option>
							<option value="3月">3</option>
							<option value="4月">4</option>
							<option value="5月">5</option>
							<option value="6月">6</option>
							<option value="7月">7</option>
							<option value="8月">8</option>
							<option value="9月">9</option>
							<option value="10月">10</option>
							<option value="11月">11</option>
							<option value="12月">12</option>
							</select>
							月 
							<select name="第1希望日" class="mfp" >
							<option value="" >-</option>
							<option value="1日">1</option>
							<option value="2日">2</option>
							<option value="3日">3</option>
							<option value="4日">4</option>
							<option value="5日">5</option>
							<option value="6日">6</option>
							<option value="7日">7</option>
							<option value="8日">8</option>
							<option value="9日">9</option>
							<option value="10日">10</option>
							<option value="11日">11</option>
							<option value="12日">12</option>
							<option value="13日">13</option>
							<option value="14日">14</option>
							<option value="15日">15</option>
							<option value="16日">16</option>
							<option value="17日">17</option>
							<option value="18日">18</option>
							<option value="19日">19</option>
							<option value="20日">20</option>
							<option value="21日">21</option>
							<option value="22日">22</option>
							<option value="23日">23</option>
							<option value="24日">24</option>
							<option value="25日">25</option>
							<option value="26日">26</option>
							<option value="27日">27</option>
							<option value="28日">28</option>
							<option value="29日">29</option>
							<option value="30日">30</option>
							<option value="31日">31</option>
							</select>
							日 
							<select name="第1希望時間" class="mfp" >
							<option value="" >-</option>
							<optgroup label="午前">
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							</optgroup>
							<optgroup label="午後">
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							</optgroup>
							</select>
							</div>
							<div class="reserved">
							<input type="hidden" name="来院希望日時・第2希望" />
							第2希望 
							<select name="第2希望月" class="mfp">
							<option value="" >-</option>
							<option value="1月">1</option>
							<option value="2月">2</option>
							<option value="3月">3</option>
							<option value="4月">4</option>
							<option value="5月">5</option>
							<option value="6月">6</option>
							<option value="7月">7</option>
							<option value="8月">8</option>
							<option value="9月">9</option>
							<option value="10月">10</option>
							<option value="11月">11</option>
							<option value="12月">12</option>
							</select>
							月 
							<select name="第2希望日" class="mfp" >
							<option value="" >-</option>
							<option value="1日">1</option>
							<option value="2日">2</option>
							<option value="3日">3</option>
							<option value="4日">4</option>
							<option value="5日">5</option>
							<option value="6日">6</option>
							<option value="7日">7</option>
							<option value="8日">8</option>
							<option value="9日">9</option>
							<option value="10日">10</option>
							<option value="11日">11</option>
							<option value="12日">12</option>
							<option value="13日">13</option>
							<option value="14日">14</option>
							<option value="15日">15</option>
							<option value="16日">16</option>
							<option value="17日">17</option>
							<option value="18日">18</option>
							<option value="19日">19</option>
							<option value="20日">20</option>
							<option value="21日">21</option>
							<option value="22日">22</option>
							<option value="23日">23</option>
							<option value="24日">24</option>
							<option value="25日">25</option>
							<option value="26日">26</option>
							<option value="27日">27</option>
							<option value="28日">28</option>
							<option value="29日">29</option>
							<option value="30日">30</option>
							<option value="31日">31</option>
							</select>
							日 
							<select name="第2希望時間" class="mfp" >
							<option value="" >-</option>
							<optgroup label="午前">
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							</optgroup>
							<optgroup label="午後">
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							</optgroup>
							</select>
							</div>
							<p class="comment-red f14">日曜 祝日は休診です。尚、矯正無料相談の最終受付は17時45分とさせて頂いております。</p>
							<p class="comment f14">当日・前日は予約が取りづらい場合がございますので、
								3日前程度の余裕を持ってご予約いただきますようお願い致します。お急ぎの場合はお電話にてご連絡ください。<br>
								希望日時が医院の休診時間等と重なっていないかご確認ください。<br>
								希望日時に添えない場合もございますので予めご了承ください。</p>
							<br>
							<input name="来院希望日時" type="checkbox" value="いつでも構わない" id="checkbox40">
							<label for="checkbox40">←いつでも構わない方はチェック</label>
							<p class="comment f14">当医院より、空いている日時を追ってお知らせ致します。</p>
						</td>
					</tr>
					<tr>
						<th>郵便番号<p>postcode</p></th>
					</tr>
					<tr>
						<td><input class="zip" type="text" name="SP郵便番号" size="15" > <input class="zipbtn" type="button" value="〒から住所を自動入力" onclick="mfpc('mailform','SP郵便番号','SP住所');" /></td>
					</tr>
					<tr>
						<th>住所<p>address</p></th>
					</tr>
					<tr>
						<td><input class="add" type="text" name="SP住所" size="40" ></td>
					</tr>
					<tr>
						<th>ご希望・ご質問<p>inquiry body</p></th>
					</tr>
					<tr>
						<td><textarea name="ご希望・ご質問" rows="10" cols="40"></textarea></td>
					</tr>
					<tr>
						<th>アンケート<p>Questionnaire</p></th>
					</tr>
					<tr>
						<td>
							<select name="アンケート">
							<option value="" >当サイトをどこで知りましたか？</option>
							<option value="PCでYahoo">PCでYahoo</option>
							<option value="PCでGoogle">PCでGoogle</option>
							<option value="スマートフォン">スマートフォン</option>
							<option value="審美歯科ネット">審美歯科ネット</option>
							<option value="矯正歯科ネット">矯正歯科ネット</option>
							<option value="その他の情報サイト">その他の情報サイト</option>
							<option value="テレビや雑誌等のメディア">テレビや雑誌等のメディア</option>
							<option value="医院を通りかかって">医院を通りかかって</option>
							<option value="ご紹介">ご紹介</option>
							<option value="その他">その他</option>
							</select><br><br>
							※ご紹介の方は、差し支えなければご紹介者様のお名前をご記入ください。<br><br>
							<input class="nm" type="text" name="紹介者" size="30">
						</td>
					</tr>
					<tr>
						<th><span>*</span>は必須項目です。</th>
					</tr>
					<tr>
						<td class="submit_wrap">
							<input class="submit_button" type="submit" value="予約する" />
							<input class="reset_button" type="reset" name="reset" value="リセット" />
						</td>
					</tr>
				</tbody>
			</table>
			</form>
		
			<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/mailform/mailform.js" charset="utf-8"></script>
			<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/mailform/postcodes/get.cgi?js" charset="utf-8"></script>

			<div class="note-wrap">
				<div class="head f20">当院からのお願い</div>
				<div class="note f16">
					<p>当院では、一人一人の患者様の治療を安心安全に、円滑に行うために診療時間を予約制にさせて頂いております。<br>
					それにより患者様の貴重なお時間を無駄にしないよう、スタッフ一同で日々努めております。<br>
					患者様に、予約について当院からのお願いがありますので、ご一読頂き、ご理解ご協力頂けますよう、よろしくお願い致します。</p>
					<span class="title">キャンセルについて</span>
					<p>予約を変更、キャンセルされる場合は、必ず前日までに、やむを得ない場合は当日の予約時間までにご連絡頂くことを
					お願いしております。無断キャンセルはおやめ頂きますようお願い申し上げます。<br>
					予約時間に来院がない場合には、当院より確認のお電話をさせていただいておりますので、ご了承ください。</p>
					<span class="title">遅刻について</span>
					<p>予約時間より遅れる場合にはお電話にてご連絡を頂けますようお願い致します。<br>
					次の患者様の予約が入っている場合などは、予約された治療時間が短くなるため、
					治療内容が変更することもございますのでご了承ください。15分以上遅れる場合には、
					予約の取り直しをお願いする場合もございますので、ご了承ください。</p>
					<span class="title">治療時間について</span>
					<p>当院では、極力予約時間に来ていただいた患者様をお待たせしないよう努めておりますが、緊急を要する患者様の診療や、
					前の患者様の治療が予定より長引く場合には、お約束の時間よりもずれる場合もありますので、
					その際にはご理解、ご了承頂きますようお願い致します。</p>
					
					<p>なお、ご予約の変更やキャンセルについてはメールでも受け付けておりますが、<br>
					当日のキャンセルや予約の変更、時間に遅れる場合のご連絡については出来るだけお電話にて頂けますようお願い致します。</p>
				</div>
			</div>
			
		</section>
		
		<!-- /appoint-section -->

    </section>





    <section class="breadcrumb-wrapper">
        <div class="breadcrumb-wrapper__content">
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/icon-logo-red.png" alt="logo">
                    </a>
                </li>
                <li>診療予約・矯正無料相談</li>
            </ul>
        </div>
    </section>


</main>
	