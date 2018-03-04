<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//constants for twitter Oauth package (twitter authentication)
$CONSUMER_KEY =	"PmhhyzEDMaf6V17xthRhI3qxR";
$CONSUMER_SECRET ="OmT4AY7fzRZlQGQWvnwMTQeYusMs0axJVvLt8KZnLfP3SC62aT";
$ACCESS_TOKEN = "179333574-ZbVWfe5F3TxMCXdpj6cOwZ3ZhKb3FxdHdu1AoDd9";
$ACCESS_SECRET = "xq0Q2h5bbOtyteG4d89LraUukhYThzMQ0v7qeUM9QGgs7";


$mainWindow = '<div id="mainwindow">enter username u want to check followers of</div>';
$pickUsernameForm = '<form method="post" id="pickUsernameForm">
            <input type="text" name="username" value="_horazon_"></input>
            <input type="submit" value="go!">
            </form>';
echo $mainWindow;
echo $pickUsernameForm;

//make a connection (authenticate) with twitter
$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_SECRET);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  //we need to clean this
  if (isset($_POST['username'])){
    $usernamePicked = $_POST['username'];
    $followersList = $connection->get('followers/list',array('screen_name' => $usernamePicked )); //'cursor' => $cursor_value
    $IdsAndUsernames = array();

    $followersList = get_object_vars($followersList);
    foreach ($followersList['users'] as $key => $value)
    {
      $user = get_object_vars($value);
      print_r($user['screen_name'] . '<br>');
    }
}
}
  //  var_dump(json_decode($followersList->users[0]));



function objectToArray( $data )
{
    if ( is_object( $data ) )
        {
          $d = get_object_vars( $data );
          return $d;
          }
}


?>
