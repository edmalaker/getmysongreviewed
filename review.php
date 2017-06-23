<?php 
require 'core/init.php';
$general->logged_out_protect();
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
    <title>Get My Song Reviewed Review</title>
	<meta name='description' content='Where you review songs.'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	

  
  
<?php
  // starter
require_once('content/starter.php');

$username 	= htmlentities($user['username']); // storing the user's username after clearning for any html tags.

$is_all_good;
$max_reviews = 20;



$filename = "uploads/".$user_id."/";
$in_play = htmlentities($user['in_play']);
$reviews_given = htmlentities($user['reviews_given']);
$reviews_gotten = htmlentities($user['reviews_gotten']);


// r1 - r20 are the reviews that the user has done ---- should probably be an array
$r1 = htmlentities($user['r1']);
$r2 = htmlentities($user['r2']);
$r3 = htmlentities($user['r3']);
$r4 = htmlentities($user['r4']);
$r5 = htmlentities($user['r5']);
$r6 = htmlentities($user['r6']);
$r7 = htmlentities($user['r7']);
$r8 = htmlentities($user['r8']);
$r9 = htmlentities($user['r9']);
$r10 = htmlentities($user['r10']);
$r11 = htmlentities($user['r11']);
$r12 = htmlentities($user['r12']);
$r13 = htmlentities($user['r13']);
$r14 = htmlentities($user['r14']);
$r15 = htmlentities($user['r15']);
$r15 = htmlentities($user['r16']);
$r17 = htmlentities($user['r17']);
$r18 = htmlentities($user['r18']);
$r19 = htmlentities($user['r19']);
$r20 = htmlentities($user['r20']);

$files1 = scandir($filename);
$song_raw = $files1[2];





	if ($song_raw=="")
	{ 
		//auto go to error page
		header('Location: no-song-error.php');	
	} else {}
	
	
	
	
	
/*
//checks if a song is uploaded if not goes to error page
if (file_exists($filename)) 
{	
}
else{header('Location:no-song-error.php');
}
*/






	







	//pick song to review
	foreach($db->query('SELECT id,in_play,reviews_given,reviews_gotten FROM users') as $row) 
	{
		$others_id = $row['id'];
		$others_in_play = $row['in_play'];
		$others_reviews_given= $row['reviews_given'];
		$others_reviews_gotten= $row['reviews_gotten'];



		//checks if a song has been placed in play if not goes to error page
	if($in_play == 1)
	{
	}
	else
	{
		//no song in play
		$is_all_good = 2;
		break;
	} 	


		if($others_in_play == 1)
		{
			if($others_id != $user_id)
			{
			
			//checks if too many reviews have been done if so goes to error page
							if($reviews_given < $max_reviews)
							{
							}
							else 
							{
								//did max reviews
								$is_all_good = 1;
								break;
							} 	
							
							
							
				if($others_reviews_gotten < $others_reviews_given )
				{
					if($others_reviews_gotten < $max_reviews )
					{
						if($others_id != $r1 && $others_id != $r2 && $others_id != $r3 && $others_id != $r4 && $others_id != $r5 && $others_id != $r6 && $others_id != $r7 && $others_id != $r8 && $others_id != $r9 && $others_id != $r10 && $others_id != $r11 && $others_id != $r12 && $others_id != $r13 && $others_id != $r14 && $others_id != $r15 && $others_id != $r16 && $others_id != $r17 && $others_id != $r18 && $others_id != $r19 && $others_id != $r20)
						{
							$others_filename = "uploads/".$others_id."/";
							$files1 = scandir($others_filename);
							$file = $files1[2];
							$song = $others_filename.$file;




							// *******************************************************Song Player

							if($file == "")
								{
									echo "There are currently no songs to review. Please check back in a few hours. If still nothing please contact us and let us know as it could be a problem. Thank you, we are sorry for the inconvenience.";
								}
							else 
								{
									echo " $file";
								}
						
							echo "<br />";
							echo "<object type=\"application/x-shockwave-flash\" data=\"player.swf\" width=\"200\" height=\"20\" >";
							echo "<param name=\"movie\" value=\"player.swf\" />";
							echo "<param name=\"FlashVars\" value=\"mp3=$song&showvolume=1\"/>";
							echo "</object>";
							echo "<br />";
							

							$is_all_good = 3;
							break;

						}
					}
				}
			}
		}
	}		
	
	
	

if($is_all_good != 1 && $is_all_good != 2 && $is_all_good != 3)
{echo "Sorry, but there are no more songs to review at this time. Please try again in a little while.";}

if($is_all_good == 1)
{echo "Sorry, but you have done all your reviews for now";}

if($is_all_good == 2)
{echo "Sorry, but you need to upload and put a song in play before you can do reviews.";}




if($is_all_good == 3){
echo "<form class=\"col-xs-12\" name=\"input\" action=\"submit-review.php\" method=\"post\">";
echo "<br /><p>Remember to give the type of review that you would like to get.</p>";
echo "<br />";
//sound quality
echo "<fieldset>";
echo "<legend>Sound Quality</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"sound_quality\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"sound_quality\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"sound_quality\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"sound_quality\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"sound_quality\" value=5 />Especially Noteworthy</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";
//Music Composition
echo "<fieldset>";
echo "<legend>Music Composition</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"music_composition\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"music_composition\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"music_composition\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"music_composition\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"music_composition\" value=5 />Especially Noteworthy</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Beat
echo "<fieldset>";
echo "<legend>Beat/Feel</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"beat\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Drums
echo "<fieldset>";
echo "<legend>Drums</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"drums\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Bass
echo "<fieldset>";
echo "<legend>Bass</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"bass\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Guitar
echo "<fieldset>";
echo "<legend>Guitar</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"guitar\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Keyboard
echo "<fieldset>";
echo "<legend>Keyboard/Piano</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"keyboard\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Other
echo "<fieldset>";
echo "<legend>Other Instruments</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"other\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"other\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"other\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"other\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"other\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"other\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//Vocals
echo "<fieldset>";
echo "<legend>Vocals</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"vocals\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//lyrics
echo "<fieldset>";
echo "<legend>Lyrics</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=5 />Especially Noteworthy</label></li>";
echo "<li><label><input type=\"radio\" name=\"lyrics\" value=6 />Not Applicable</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//overall
echo "<fieldset>";
echo "<legend>Overall</legend>";
echo "<ol>";
echo "<li><label><input type=\"radio\" name=\"overall\" value=1 />Really Bad</label></li>";
echo "<li><label><input type=\"radio\" name=\"overall\" value=2 />Not Very Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"overall\" value=3 checked = \"checked\" />Good</label></li>";
echo "<li><label><input type=\"radio\" name=\"overall\" value=4 />Great</label></li>";
echo "<li><label><input type=\"radio\" name=\"overall\" value=5 />Especially Noteworthy</label></li>";
echo "</ol>";
echo "</fieldset>";
echo "<br />";

//submit
echo "<input type=\"hidden\" name=\"others_id\" value=$others_id>";
echo "<input type=\"hidden\" name=\"others_reviews_gotten\" value=$others_reviews_gotten>";
echo "<input type=\"submit\" value=\"Submit\">";



echo "</form>";
}

require_once('content/ender.php');
?>