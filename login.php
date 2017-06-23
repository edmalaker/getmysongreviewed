<?php 
require 'core/init.php';
$general->logged_in_protect();

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];




if (empty($_POST) === false) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Sorry, but we need your username and password.';
	} else if ($users->user_exists($username) === false) {
		$errors[] = 'Sorry that username doesn\'t exists.';
	} else if ($users->email_confirmed($username) === false) {
		$errors[] = 'Sorry, but you need to activate your account. 
					 Please check your email.';
	} else {
		if (strlen($password) > 18) {
			$errors[] = 'The password should be less than 18 characters, without spacing.';
		}
		$login = $users->login($username, $password);
		if ($login === false) {
			$errors[] = 'Sorry, that username/password is invalid';
		}else {
session_regenerate_id(true);// destroying the old session id and creating a new one
			$_SESSION['id'] =  $login;
			
			
			
			if(1 == 1)
{
$dsli = 0;
$query = $db->prepare("UPDATE `users` SET
								`dsli`	= ?
								
								
								WHERE `username` 		= ? 
								");
								
								$query->bindValue(1, $dsli);
								$query->bindValue(2, $username);
		
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}	
}
			
			
			
			
			header('Location: home.php');
			exit();
		}
	}
} 


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
    <title>Get My Song Reviewed Log In</title>
	<meta name='description' content='This is where you log in to Get My Song Reviewed'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	

  
  <?php
  // starter
require_once('content/starter.php');
require_once('content/login_content.php');
require_once('content/ender.php');
?>
