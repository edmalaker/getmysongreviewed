<?php 
require 'core/init.php';
require 'content/ad_script.php';
?>


<!doctype html>
<html lang="en">
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<?php
	//use php comments instead of html
//The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags
?>

	
	<link rel="stylesheet" type="text/css" href="css/gmsr_style.css" >
	<title>Get My Song Reviewed Privacy Policy</title>
	<meta name='description' content='Get My Song Reviewed privacy policy.'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">


<?php 
include_once("content/google_analytics.php"); 
include_once("content/pt1.php"); 
?>


<?php  // ********************************************CONTENT_BAR*****************************************************************************    ?>

<div id = "content_bar_frontpage">

<?php
require_once('footers_n_menus/top_menu.php');
require_once('content/privacy_content.php');
?>

</div>


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