<?php

$csv = new \SplFileObject ( "tweets.csv" , "r" );

while($line = $csv->fgetcsv()){
	if($line[0]=="tweet_id") continue; // skip header
	if(strlen($line[0])==0) continue; // skip blank
	echo "{$line[0]}\t$line[5]".PHP_EOL;
	//exit;
}
/*
array(10) {
  [0]=>
  string(8) "tweet_id"
  [1]=>
  string(21) "in_reply_to_status_id"
  [2]=>
  string(19) "in_reply_to_user_id"
  [3]=>
  string(9) "timestamp"
  [4]=>
  string(6) "source"
  [5]=>
  string(4) "text"
  [6]=>
  string(19) "retweeted_status_id"
  [7]=>
  string(24) "retweeted_status_user_id"
  [8]=>
  string(26) "retweeted_status_timestamp"
  [9]=>
  string(13) "expanded_urls"
}
array(10) {
  [0]=>
  string(18) "9*********************4"
  [1]=>
  string(0) ""
  [2]=>
  string(0) ""
  [3]=>
  string(25) "2001-01-01 00:00:00 +0000"
  [4]=>
  string(79) "<a href="http://twitter.com/call_user_func" rel="nofollow">composer_release</a>"
  [5]=>
  string(128) "[New]ab*************************************16O"
  [6]=>
  string(0) ""
  [7]=>
  string(0) ""
  [8]=>
  string(0) ""
  [9]=>
  string(41) "https://git******************ols"
}
*/