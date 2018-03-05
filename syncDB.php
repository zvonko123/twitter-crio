<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//constants for twitter Oauth package (twitter authentication)
$CONSUMER_KEY =	"PmhhyzEDMaf6V17xthRhI3qxR";
$CONSUMER_SECRET ="OmT4AY7fzRZlQGQWvnwMTQeYusMs0axJVvLt8KZnLfP3SC62aT";
$ACCESS_TOKEN = "179333574-ZbVWfe5F3TxMCXdpj6cOwZ3ZhKb3FxdHdu1AoDd9";
$ACCESS_SECRET = "xq0Q2h5bbOtyteG4d89LraUukhYThzMQ0v7qeUM9QGgs7";


//$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_SECRET);


    $usernamePicked = file_get_contents("usernameToCheck.json");
    $usernamePicked = json_decode($usernamePicked, true);
    var_dump($usernamePicked);
    // $followersList = $connection->get('followers/list',array('screen_name' => $usernamePicked )); //'cursor' => $cursor_value
    // $IdsAndUsernames = array();
    //
    // $followersList = get_object_vars($followersList);
    // foreach ($followersList['users'] as $key => $value)
    // {
    //   $user = get_object_vars($value);
    //   print_r($user['screen_name'] . '<br>');
    // }
 ?>
