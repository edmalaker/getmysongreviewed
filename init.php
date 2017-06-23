<?php 

/**/

/*
php built in function to start a session
*/
session_start();

/*
function ob_start is added to avoid a common error of 'header already sent' is this error comes up uncomment the ob_start function 
*/
//ob_start();


require_once 'connect/database.php';
require_once 'classes/users.php';
require_once 'classes/general.php';

/*uncomment next line to add bcript security, server must support */
//require 'classes/bcrypt.php';


/*
$users variable is the database connection. variable $db is from database.php
*/
$users 		= new Users($db);



$general 	= new General();
//uncomment next line to add bcript security, server must support
//$bcrypt 	= new Bcrypt();

error_reporting(0);
$errors = array();

if ($general->logged_in() === true)  {
	$user_id 	= $_SESSION['id'];
	$user 		= $users->userdata($user_id);
}

?>
