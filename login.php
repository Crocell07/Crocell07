<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Lone Tree Vet Sign In</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<video autoplay loop muted class="back-video">
		<source src="img/pet.mp4" type="video/mp4">
	</video>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>