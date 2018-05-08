<?php
require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config.php');
use \Abraham\TwitterOAuth\TwitterOAuth;

$c = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET, TWITTER_ACCESS_TOKEN, TWITTER_ACCESS_TOKEN_SECRET);
$credentials = $c->get("account/verify_credentials");
//var_dump($content);
$user_id = $credentials->id_str;

while($l = fgets(STDIN)){
    $data = explode("\t", $l);

    $res = $c->post(
        'statuses/destroy',
        [
            'id'=>$data[0]
        ]
        );
    var_dump($res);
}

