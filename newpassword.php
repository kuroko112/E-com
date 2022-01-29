<?php 

   $errors   = array();
   $email    = "";
   $password = "";
   $db = mysqli_connect('localhost', 'root', '789456123258', 'a4g');
   if(isset($_POST['ok']))
   {

     $email     = $_POST['email'];  
     $password  = $_POST['pass'];
     $password  = md5($password);
     if (empty($email))    { array_push($errors, "Email    is required"); }
     if (empty($password)) { array_push($errors, "Password is required"); }
     $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $user   = mysqli_fetch_assoc($result);
     if(count($errors) == 0)
     {

         if($user)
         {
             if($user['email'] === $email)
             {
                 $query = "UPDATE users SET  Password = '$password' WHERE email = '$email'";
                 mysqli_query($db,$query);  
             }
                
            } else {
            array_push($errors,"The Email Not Exist");
         }
     }
   }


   if(isset($_POST['Gohome']))
   {
        header("location: index.php");
   }




?>
<link rel="stylesheet" href="layout/css/style.css">
<br>
<h1 style="text-align:center">New password</h1><br>

<form  method="post">
    <?php include('error.php'); ?>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email"><br>
    </div>

    <div class="input-group">
        <label>New Password</label>
        <input type="password"  name="pass"><br>
    </div>

    <div class="input-group">
        <button class="btn" style="width:100%; height:50px;" name="ok">Save</button>
    </div>

    <div class="input-group">
        <button class="btn" style="width:100%; height:50px;" name="Gohome">Back Home</button>
    </div>
</form>
