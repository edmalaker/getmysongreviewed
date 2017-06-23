 <!-- Bootstrap -->
    <!--  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    -->
	
	<!-- Latest compiled and minified CSS as of 4/26/17 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	
	<!-- Latest compiled and minified JavaScript as of 4/26/17 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	
	
	<link href="css/mystyle.css" rel="stylesheet">
	<!-- google font -->
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
  
	<body>


		<div class="container">


		<!-- row 1 -->
			<div class="row page-header text-center clearfix">
		
				
				<h1 class="">Get My Song Reviewed</h1>
				

			</div><!-- end row 1 -->


		<!-- row 2 -->
			<div class="row">
				<ul class="nav nav-pills nav-justified clearfix">

				<?php 
				// checks if person is logged in and gives appropriate menu
				
				// menu if logged in
				if($general->logged_in()){
				?>
	
					<li><a title = "Profile" href="profile.php?username=<?php echo $user['username'];?>">Profile</a></li>
					<li><a title = "Review" href="review.php">Review </a></li>
					<li><a title = "Settings" href="settings.php">Settings</a></li>
					<li><a title = "Change Password" href="change-password.php">Change Password</a></li>
					<li><a title = "Log Out" href="logout.php">Log Out</a></li>
				
				
				<?php
				// menu if NOT logged in
				}else{
				?>
			
					<li class="center"><a title = "Sign Up" href="signup.php">Sign Up</a></li>
					<!--  <li class = "center"><a title = "About" href="about.php">About</a></li>	-->
					<li class="center"><a title = "Login" href="login.php">Login</a></li>
		


				<?php
				}
				?>
			
				</ul>
			</div> <!-- end row 2 -->
	  