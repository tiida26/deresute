<?php

require 'TwistOAuth/build/TwistOAuth.phar';

$consumer_key = "";
$consumer_secret = "";
$access_token = "";
$access_token_secret = "";

$screen_name = '[screen_name]';
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$param = array('screen_name' => $screen_name, 'count' => '5');
$statuses = $connection->get('statuses/user_timeline', $param);

foreach ($statuses as $status) {
    echo $status->text;
}
