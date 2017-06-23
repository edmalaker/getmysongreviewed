<?php 

		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}

		?>

		<h1 id="frontpage_h1">Login</h1>
		
		<form  method="post" action="login.php">
		<div class="form-group">
		
		
		
		
		
		
			<label class="form-field" for="username">Username:</label>
			<input type="text" name="username" class="form-control" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" />
			
			<label class="form-field" for="password">Password:</label>
			<input type="password" name="password" class="form-control" />
			
			
			<button class="form-field" type="submit" name="submit" value ="Log In" class="btn btn-primary">Log In</button>
			
			<hr>
		<a title = "recover password" href="confirm-recover.php">Forgot your username/password?</a>
		</div>
		<h3><a href = "http://getmysongreviewed.com/" title = "getmysongreviewed.com" target_blank>Home</a></h3>
		</form>