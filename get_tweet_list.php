<?php
require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/config.php');
use \Abraham\TwitterOAuth\TwitterOAuth;

$c = new TwitterOAuth(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET, TWITTER_ACCESS_TOKEN, TWITTER_ACCESS_TOKEN_SECRET);
$credentials = $c->get("account/verify_credentials");
//var_dump($content);
$user_id = $credentials->id_str;

$statuses = $c->get("statuses/user_timeline", 
["user_id" => $user_id]);


$statuses = $c->get("statuses/user_timeline", [
    "user_id" => $user_id,
    'count' => 2,
]);

$max_id = $statuses[0]->id_str;

get_timeline($c, $user_id, $max_id);

function get_timeline($c, $user_id, $max_id, $count=200){

    $statuses = $c->get("statuses/user_timeline", [
        "user_id" => $user_id,
        'max_id' => $max_id,
        'count' => 200,
    ]);

    if(count($statuses)>1){
        foreach($statuses as $status){
            echo $status->id_str;
            echo "\t";
            echo $status->text;
            echo PHP_EOL;
        }
        get_timeline($c, $user_id, $status->id_str, $count);
    }        
        
}
