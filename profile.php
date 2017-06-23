<?php 
include 'core/init.php';

$general->logged_out_protect();

$reviews_given = htmlentities($user['reviews_given']);
$reviews_gotten = htmlentities($user['reviews_gotten']);
$max_reviews = 20;


if(isset($_GET['username']) && empty($_GET['username']) === false) { // Putting everything in this if block.

 	$username   = htmlentities($_GET['username']); // sanitizing the user inputed data (in the Url)
	if ($users->user_exists($username) === false) { // If the user doesn't exist
		header('Location:index.php'); // redirect to index page. Alternatively you can show a message or 404 error
		die();
	}else{
		$profile_data 	= array();
		$user_id 		= $users->fetch_info('id', 'username', $username); // Getting the user's id from the username in the Url.
		$profile_data	= $users->userdata($user_id);
	} 
	
	
	/* SONG PLAYER*/
	$filename = "uploads/".$user_id."/";
	$files1 = scandir($filename);
$song_raw = $files1[2];
	
	$song = $filename.$song_raw;
	
	
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
    <title>Get My Song Reviewed Profile Page</title>
	<meta name='description' content='Get My Song Reviewed Profile Page'>
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
	

  
 <?php
  // starter
require_once('content/starter.php');
?>

<h1 class="col-xs-12 text-center"><?php echo $profile_data['username']; ?>'s Profile</h1>

	    	<div class="jumbotron">
				<?php 
	    			$image = $profile_data['image_location'];
	    			echo "<img src='$image'>";
	    		?>
	    	</div>
			
			
	    	<div class="col-xs-12 text-center">
			
			<?php /*profile name*/?>
	    		<?php if(!empty($profile_data['first_name']) || !empty($profile_data['last_name'])){?>
				
				<span>Name:</span>
		    		<span><?php if(!empty($profile_data['first_name'])) echo $profile_data['first_name'], ' '; ?></span>
		    		<span><?php if(!empty($profile_data['last_name'])) echo $profile_data['last_name']; ?></span>
						<br />
				
	    		<?php 
	    		} 
	    		
				
			
				if($profile_data['gender'] != 'undisclosed'){
	    		?>
				
			<?php /*profile gender*/?>
			
		    		<span>Gender: </span>
		    		<span><?php echo $profile_data['gender']; ?></span>
					<br />
	    		<?php } 
			
			
			
	    		if(!empty($profile_data['bio'])){
		    		?>
					
			<?php /*profile Bio*/?>
		    		<span>Bio: </span>
		    		<span><?php echo $profile_data['bio']; ?></span>
					<br /><hr />
		    		<?php 
	    		}
	    		?>
				
				
				
			
				
	    	</div><?php /*    *******************************end personal info*/  ?>
			
			
			
			
			
			<?php // ****************************************STEPS***********************************?>
			
			
			<h2 class="col-xs-12">Get Started</h2>
			
			<ul class="col-xs-12">
			<li>
			<span class = "profile_bold"><a title="Upload" href ="upload.php">Step 1: Upload a song - </a></span>
			<span class = "profile_reg">Song must be an mp3, and be less than 10mb in size. </span><br /><br />
			</li>
			
<li>
			<span class = "profile_bold">Step 2: Test your Song - </span>
			<?php 
			
			echo $song_raw." ";
	echo "<object type=\"application/x-shockwave-flash\" data=\"player.swf\" width=\"200\" height=\"20\" >";
echo "<param name=\"movie\" value=\"player.swf\" />";
echo "<param name=\"FlashVars\" value=\"mp3=$song&showvolume=1\"/>";
echo "</object>";
			
			?>
			<br /><br />
			</li>
			
			<li>
			<span><a title="Put in play" href ="in-play.php">Step 3: Put your song in play - </a></span>
			<span>A quick necessary step, once complete it returns you to your homepage. </span><br /><br />
			</li>
			
			<li>
			<span><a title="Review" href ="review.php">Step 4: Do Reviews - </a></span>
			<span>You can do up to 20 reviews per song. YOU MUST DO AT LEAST ONE REVIEW TO GET A REVIEW!</span><br /><br />
			</li>
			
			<li>
			<span><a title="remove from play" href ="from-play.php">Step 5: Remove your song from play - </a></span>
			<span class = "profile_reg">Once your song has received all of its reviews (up to 20 per song) and you have had a chance to look over the reviews you have received. 
			WARNING! You can remove a song at any time but when you do you lose the reviews you did and the reviews you received. You start over with a new song. </span><br /><br />
		</li>
		
		</ul>
		
		<span>Reviews Given: </span>
		<span><?php echo $reviews_given; ?><br /></span>
		
		<span>Reviews Gotten: </span>
		<span><?php echo $reviews_gotten;?> <br /></span>
		
		
		<?php
		if($reviews_gotten == $max_reviews)
		{
		echo "This song has received the maximum number of reviews. Once you look over your scores you can upload a new song by removing this song from play.";
		}
		
$num = 1;
$current_avg;
//this gets all reviews
foreach($db->query('SELECT * FROM reviews') as $row) {

$whos = $row['whos'];
// this if makes sure to only see the users reviews
if($whos==$user_id)
{
echo "<hr>";
echo "<br /><br/>";
echo "<span class = \"profile_bold\">Review Number ".$num."</span> <br>";
echo "Sound Quality - ".$row['sound_quality']."<br />";
echo "Music Composition - ".$row['music_composition']."<br />";
echo "Beat - ".$row['beat']."<br />";
echo "Drums - ".$row['drums']."<br />";
echo "Bass - ".$row['bass']."<br />";
echo "Guitar - ".$row['guitar']."<br />";
echo "Keyboard - ".$row['keyboard']."<br />";
echo "Other Instrument - ".$row['other']."<br />";
echo "Vocals - ".$row['vocals']."<br />";
echo "Lyrics - ".$row['lyrics']."<br />";
echo "Overall -  ".$row['overall']."<br />";

$num++;
$current_avg_sq= $current_avg_sq + $row['sound_quality'];
$current_avg_mc= $current_avg_mc + $row['music_composition'];
$current_avg_beat= $current_avg_beat + $row['beat'];
$current_avg_drums= $current_avg_drums + $row['drums'];
$current_avg_bass= $current_avg_bass + $row['bass'];
$current_avg_guitar= $current_avg_guitar + $row['guitar'];
$current_avg_keyboard= $current_avg_keyboard + $row['keyboard'];
$current_avg_other= $current_avg_other + $row['other'];
$current_avg_vocals= $current_avg_vocals + $row['vocals'];
$current_avg_lyrics= $current_avg_lyrics + $row['lyrics'];
$current_avg_overall= $current_avg_overall + $row['overall'];
}
}

echo "<hr>";
echo "<span class = \"profile_bold\">Total Score</span>";
echo "<br />";
echo "Sound Quality - ".$current_avg_sq/$reviews_gotten;
echo "<br />";
echo "Music Composition - ".$current_avg_mc/$reviews_gotten;
echo "<br />";
echo "Beat - ".$current_avg_beat/$reviews_gotten;
echo "<br />";
echo "Drums - ".$current_avg_drums/$reviews_gotten;
echo "<br />";
echo "Bass - ".$current_avg_bass/$reviews_gotten;
echo "<br />";
echo "Guitar - ".$current_avg_guitar/$reviews_gotten;
echo "<br />";
echo "Keyboard - ".$current_avg_keyboard/$reviews_gotten;
echo "<br />";
echo "Other - ".$current_avg_other/$reviews_gotten;
echo "<br />";
echo "Vocals - ".$current_avg_vocals/$reviews_gotten;
echo "<br />";
echo "Lyrics - ".$current_avg_lyrics/$reviews_gotten;
echo "<br />";
echo "Overall - ".$current_avg_overall/$reviews_gotten;

?>


<?php
require_once('content/ender.php');
?>

<?php  
}else{
	//header('Location: index.php'); // redirect to index if there is no username in the Url
	}
?>