<?php 
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['username']); // storing the user's username after clearning for any html tags.
require 'content/ad_script.php';
?>



<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/gmsr_style.css" >
	<title>Get My Song Reviewed Change Password Page 2</title>
	<meta name='description' content='Get My Song Reviewed Change Password Page 2'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">

	
</head>
<body>	
<?php 
include_once("content/google_analytics.php");
include_once("content/pt1.php");
?>



<?php  // ********************************************CONTENT_BAR*****************************************************************************    ?>

<div id = "content_bar_frontpage">

<?php
require_once('footers_n_menus/top_menu.php');
?>

<?php
        if(empty($_POST) === false) {
           
            if(empty($_POST['current_password']) || empty($_POST['password']) || empty($_POST['password_again'])){

                $errors[] = 'All fields are required';

            }else 
            
            
/*
            if($bcrypt->verify($_POST['current_password'], $user['password']) === true) {
*/

$judas = 0;
                if (trim($_POST['password']) != trim($_POST['password_again'])) {
                    $errors[] = 'Your new passwords do not match';
					$judas = 1;
                } else if (strlen($_POST['password']) < 6) { 
                    $errors[] = 'Your password must be at least 6 characters';
					$judas = 1;
                } else if (strlen($_POST['password']) >18){
                    $errors[] = 'Your password cannot be more than 18 characters long';
					$judas = 1;
                } 

            } else {
                $errors[] = 'Your current password is incorrect';
				$judas = 1;
            }
        
if ($judas == 0)
{echo "Success! Your password has been changed.";}
		
		
        if (isset($_GET['success']) === true && empty ($_GET['success']) === true ) {
    		echo '<p>Your password has been changed!</p>';
        } else {

            
            if (empty($_POST) === false && empty($errors) === true) {
                $users->change_password($user['id'], $_POST['password']);
                header('Location: change-password.php?success');
            } else if (empty ($errors) === false) {
                    
                echo '<p>' . implode('</p><p>', $errors) . '</p>';  
            
            }
            
        }
        ?> 

</div> <?php  // *END CONTENT_BAR   ?>


<?php  // **************************************************************************************************************************END CONTENT_BAR   ?>

<?php  // ********************************************RIGHT_BAR*****************************************************************************    ?>

<div id = "right_bar_frontpage"></div>
<div id = "ad5">

<?php
if ($ad5 == "")
{}else{
echo $ad5;
}
?>

</div>
<div id = "ad6">

<?php
if ($ad6 == "")
{}else{
echo $ad6;
}
?>

</div>
<div id = "ad7">

<?php
if ($ad7 == "")
{}else{
echo $ad7;
}
?>

</div>

<?php  // **************************************************************************************************************************END RIGHT_BAR   ?>



<?php  // ********************************************FOOT_BAR*****************************************************************************    ?>

<div id = "foot_bar_frontpage">
<?php
require_once('footers_n_menus/gmsr_footer.php');
?><?php  // end foot_bar    ?>
</div>

<?php  // ********************************************END FOOT_BAR*****************************************************************************    ?>




<?php  // ********************************************Page Content*****************************************************************************    ?>

<div id = "enoch_frontpage">

<ul >
<li class = "sidebar_menu"><a title = "Home" href="home.php">Home</a></li>
<li class = "sidebar_menu"><a title = "Contact Us" href="contact.php">Contact</a></li>
</ul>

</div>



<?php  // ********************************************End Page Content*****************************************************************************    ?>



</div><?php  //end website container     ?>


</body>
</html>