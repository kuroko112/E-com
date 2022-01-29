<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="layout/css/style.css">
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
            
        <form method="post" action="register.php">
            <?php include('error.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="">
            </div>
            
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="">
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>


            <div class="input-group">
  		        <label>Address</label>
  		        <input type="text" name="address">
  	        </div>

            <div class="input-group">
  		        <label>FullName</label>
  		        <input type="text" name="fullname">
  	        </div>

            <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="index.php">Sign in</a>
            </p>
        </form>
    </body>
</html>