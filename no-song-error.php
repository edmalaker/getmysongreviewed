<?php 
require 'core/init.php';
require 'content/ad_script.php';
?>


<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/gmsr_style.css" >
	<title>No Song Error</title>
	<meta name='description' content='No Song Error'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">

	
</head>
<body>	
<?php 
include_once("content/google_analytics.php");
include_once("content/pt1.php");
?>




<?php  // ********************************************CONTENT_BAR*****************************************************************************    ?>

<div id = "content_bar">

<?php 
require_once('footers_n_menus/top_menu.php');
		?>

		
<span>You need to upload a song first. </span>

</div>


<?php  // **************************************************************************************************************************END CONTENT_BAR   ?>

<?php  // ********************************************RIGHT_BAR*****************************************************************************    ?>

<div id = "right_bar"></div>
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

<div id = "foot_bar">
<?php
require_once('footers_n_menus/gmsr_footer.php');
?><?php  // end foot_bar    ?>
</div>

<?php  // ********************************************END FOOT_BAR*****************************************************************************    ?>




<?php  // ********************************************Page Content*****************************************************************************    ?>

<div id = "enoch">

<ul >
<li class = "sidebar_menu"><a title = "Home" href="home.php">Home</a></li>
<li class = "sidebar_menu"><a title = "Contact Us" href="contact.php">Contact</a></li>
</ul>

</div>



<?php  // ********************************************End Page Content*****************************************************************************    ?>



</div><?php  //end website container     ?>


</body>
</html>