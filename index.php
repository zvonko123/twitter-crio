<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//constants for twitter Oauth package (twitter authentication)
$CONSUMER_KEY =	"PmhhyzEDMaf6V17xthRhI3qxR";
$CONSUMER_SECRET ="OmT4AY7fzRZlQGQWvnwMTQeYusMs0axJVvLt8KZnLfP3SC62aT";
$ACCESS_TOKEN = "179333574-ZbVWfe5F3TxMCXdpj6cOwZ3ZhKb3FxdHdu1AoDd9";
$ACCESS_SECRET = "xq0Q2h5bbOtyteG4d89LraUukhYThzMQ0v7qeUM9QGgs7";


$mainWindow = '<div id="mainwindow">enter username u want to check followers of</div>';
$pickUsernameForm = '<form id="pickUsernameForm">
            <input id="username">Username</input>
            </form>';
echo $mainWindow;
echo $pickUsernameForm;

//make a connection (authenticate) with twitter
$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_SECRET);

?>
