#!/usr/bin/perl

$error_flag = 0;
@sendmails = ('/lib/sendmail','/usr/bin/sendmail','/usr/sbin/sendmail','/usr/lib/sendmail','/usr/local/sbin/sendmail','/usr/local/lib/sendmail');
$hit = `find \`perl -e 'print "@INC"'\` -name 'Jcode.pm' -print`;
if($hit eq $null && !(-f 'Jcode.pm')){
	$error = <<'	__error_body__';
			<dt>Jcodeがたぶんインストールされていません</dt>
			<dd>
				日本語文字コード変換モジュール「Jcode」がインストールされていません。
				<a href="http://search.cpan.org/" target="_blank">CPAN</a>から「Jcode」で検索するとJcodeが出てくると思うので、クリックして右側にあるDownloadからダウンロードしてください。
				圧縮形式が.tar.gzというタイプの圧縮ファイルのため、<a href="http://www.vector.co.jp/soft/win95/util/se166893.html" target="_blank">Lhaca</a>などの解凍ソフトで解凍してね。
				で、解凍するとゴチャゴチャファイルがあるんですが「Jcode.pm」と「Jcodeフォルダ」をsend.cgiと同じ階層にアップすればOKです。
			</dd>
	__error_body__
	$error_message .= $error;
}
@stat = stat 'send.cgi';
$permission = substr((sprintf "%03o", $stat[2]), -3);
if($permission ne '755'){
	$error = <<'	__error_body__';
			<dt>send.cgiのパーミッションが755ではありません。</dt>
			<dd>
				send.cgiのパーミッションが755ではありません。ただ、サーバの種類によっては必ずしも755がCGIの実行権限とは限らないので、よくわからない場合はサーバ会社に聞いてみてください。
				FFFTPでパーミッションを変更するには、send.cgiを右クリックして「属性変更」から755にしてください。
			</dd>
	__error_body__
	$error_message .= $error;
}

$form_enabled = "display: block;";
for($cnt=0;$cnt<@sendmails;$cnt++){
	if(-f $sendmails[$cnt]){
		$sendmail = $sendmails[$cnt];
	}
}
if($sendmail ne $null){
	$error = <<"	__error_body__";
			<dt>多分sendmailのパスはこう！</dt>
			<dd>
				このサーバのsendmailのパスはたぶんだけど<input type="text" value="${sendmail}" style="width: 150px;" />こうっ！<br />
				サーバ推奨のsendmailと違う場合はサーバ推奨のパスを使って！
			</dd>
	__error_body__
	$error_message .= $error;
}
elsif($sendmail eq $null){
	$error = <<"	__error_body__";
			<dt>sendmailのパス検出に失敗・・・</dt>
			<dd>
				ごめん・・・。和田も頑張ったんだけどさ・・・。そう人生うまくいくもんじゃないよね・・・。探したよ！必死に！交差点でも 夢の中でも こんなとこにいるはずもないのに・・・。ということで、ホントごめん・・・。サーバ会社の人に聞いてみてくださいはい・・・。生まれてきてごめんなさい・・・。
			</dd>
	__error_body__
	$error_message .= $error;
}
if($error_message ne $null){
	$error_message = "<dl id=\"error\">" . $error_message . "</dl>";
}
else {
	$error_message = '<p>問題ないんじゃない？</p>';
}
print "Pragma: no-cache\n";
print "Cache-Control: no-cache\n";
print "Content-type: text/html; charset=UTF-8\n\n";
$html = <<"__print_body__";
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<title>Mailform check 1.0</title>
		<meta name="revisit_after" content="7 days" />
		<meta name="robots" content="ALL" />
		<meta http-equiv="pragma" content="no-cache" />
		<style type="text/css">
			* {
				padding: 0px;
				margin: 0px;
			}
			p {
				font-size: 12px;
				line-height: 1.5em;
				font-family: "ＭＳ Ｐゴシック","Hiragino Kaku Gothic Pro W3","ヒラギノ角ゴ Pro W3","Osaka";
			}
			body {
				text-align: center;
			}
			div#wrapper {
				width: 800px;
				margin: 0px auto 0px auto;
			}
			div#inbox {
				padding: 10px;
				text-align: left;
			}
			dl#error {
				padding: 10px;
				border: solid 1px #FF0000;
				background-color: #FFEEEE;
			}
			dl#error dt {
				font-size: 14px;
				color: #FF0000;
			}
			dl#error dd {
				font-size: 12px;
				line-height: 1.5em;
				padding: 5px 10px 10px 5px;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="inbox">
				<h1>Mailform check 1.0.0</h1>
				<p>メールフォーム CGI UTF-8版 6.1.0用のチェッカーです。各種モジュール等のチェックを行います。</p>
				${error_message}
			</div>
		</div>
	</body>
</html>
__print_body__
print $html;
exit;
