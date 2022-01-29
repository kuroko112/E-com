<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="layout/css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	<!-- here form to input the Data  -->
  <form method="post" action="index.php">
  	<?php include('error.php'); ?>
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
  	<p>
	   Forget Your Password? <a href="newpassword.php">New passwrod</a>
  	</p> 


  </form>
</body>
</html>