#!/usr/bin/perl
if($ENV{'QUERY_STRING'} ne "js"){
	$postcodes_dir = './';
	$file_number = substr($ENV{'QUERY_STRING'}, 0, 2);
	$postcode_file = sprintf("${postcodes_dir}%02d.cgi",$file_number);
	if(-f $postcode_file){
		flock(FH, LOCK_EX);
			open(FH,"$postcode_file");
				@postcodes = <FH>;
			close(FH);
		flock(FH, LOCK_NB);
		@address = grep(/\"$ENV{'QUERY_STRING'}\"/,@postcodes);
		if(@address){
			$address[0] =~ s/\"//ig;
			@address = split(/\,/,$address[0]);
			$html = "${address[6]}\,${address[7]}\,${address[8]}";
		}
		else{
			$html = "NOT FOUND ADDRESS";
		}
	}
	else{
		$html = "NOT FOUND POSTCODE FILE";
	}
	print "Content-type: text/html; charset=UTF-8\n\n";
	print "${html}";
}
else {
	$this_url = $ENV{'SCRIPT_NAME'} . '?';
	print "Pragma: no-cache\n";
	print "Cache-Control: no-cache\n";
	print "Content-type: text/plain; charset=UTF-8\n\n";
	$script = &loadhtml("postcode.js");
	$script =~ s/<this_url>/$this_url/g;
	print $script;
}
exit;
sub loadhtml{
	my($url) = @_;
	flock(FH, LOCK_EX);
		open(FH,"$url");
			@html = <FH>;
		close(FH);
	flock(FH, LOCK_NB);
	$html = join("",@html);
	return $html;
}
