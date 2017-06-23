<?php 
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['username']); // storing the user's username after clearning for any html tags.
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
	//use php comments instead of html
//The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags
?>
    <title>Get My Song Reviewed Home</title>
	<meta name='description' content='Get My Song Reviewed Home'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	
  
  <?php
  // starter
require_once('content/starter.php');
require_once('content/homepage.php');
require_once('content/ender.php');
?>