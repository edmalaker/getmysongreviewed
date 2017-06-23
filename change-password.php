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
    <title>Get My Song Reviewed Change Password</title>
	<meta name='description' content='Where you change your password.'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	

  
  <?php
  // starter
require_once('content/starter.php');
?>

<h1 class="col-xs-12">Change Password</h1>
            
            
            <form class = "regForm" action="change-pwd-2.php" method="post">
			<div class="form-group">
                
                        <label class="form-field">Current Password:</label>
                        <input type="password" name="current_password">
                    <br />
                        <label class="form-field">New Password:</label>
                        <input type="password" name="password">
                   <br />
                        <label class="form-field">New Password Again:</label>
                        <input type="password" name="password_again">
                    <br />
                        <input label class="form-field" type="submit" value="Change Password">
                    
				</div>
            </form>
			
			
			
			
			<hr />
			
			<p class="col-xs-12">By Signing Up you agree to our:
			<a title = "Terms of Use " href="termsOfUse.php" target="_blank">Terms of Use</a> and 
			<a id = "paul" title = "Privacy Policy " href="privacyPolicy.php" target="_blank">Privacy Policy</a><br />
			</p>
		</form>

<?php
require_once('content/ender.php');
?>