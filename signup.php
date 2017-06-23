<?php 
//component 1 
require 'core/init.php';

$general->logged_in_protect();
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
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
    <title>Get My Song Reviewed Signup</title>
	<meta name='description' content='Sign Up to be a member of Get My Song Reviewed'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	

  
  <?php
  // starter
require_once('content/starter.php');
require_once('content/sform.php');
require_once('content/ender.php');
?>