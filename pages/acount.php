<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Welcome In Acount page</h1>
    <?php 
        
       // Include The File Server To Get All Data From Database And Start The New Seesion
       include_once ('../server.php');
       // Save Data User From session
       $username  = $_SESSION['username'];
       // Select the User Data From Data Database Where The username  = session User
       $query     = "SELECT * FROM users WHERE username = '$username'";
       // Do This Query And Save The Result True Or False
       $result    = mysqli_query($db, $query);
       // Fetch Data From The DataBase User session
       $row_user  = mysqli_fetch_assoc($result);
       // Save The User ID in the user id
       $userid    =  $row_user['UserID'];
       // select the data mob And Join the Table order moblie  
       $query_mob = "SELECT * FROM users 
       JOIN order_mob ON order_mob.id_userorder = users.UserID
       JOIN mob       ON mob.id_mob = order_mob.id_mob_order
       WHERE users.UserID = '$userid'";
       // Do the Query And Save The Result In $result_mob
       $result_mob = mysqli_query($db, $query_mob);
       // -------------------------------------------------------------
       $query_ad = "SELECT * FROM users 
       JOIN order_ad ON order_ad.id_userad = users.UserID
       JOIN ad       ON ad.id_ad = order_ad.id_adorder
       WHERE users.UserID = '$userid'";
       $result_ad = mysqli_query($db, $query_ad);
    
       $total = 0; // Total Price From Mobile And El.Div
       while($row_mob = mysqli_fetch_assoc($result_mob))
       {
            $total += $row_mob['price_mob'];
       }
       while($row_mob = mysqli_fetch_assoc($result_ad))
       {
            $total += $row_mob['price_ad'];
       }
       // ------------------------------------------------ 
      $total_acount = 0; // Totla An Acount From The User Session ID 
      // Select An acount From User Session 
      $query_anc   =  "SELECT total_user FROM anc WHERE id_useracn = '$userid'";
      // Do this Query And Save The result In $result_anc 
      $result_anc  = mysqli_query($db, $query_anc);
      // Fetch This Data 
      $row_anc     = mysqli_fetch_assoc($result_anc);
      // $total_acount = An Acount user Session 
      $total_acount    = $row_anc['total_user'];
      // $total_anc_to = $total_acount - $total(Total Price (Mob+El.div))
      $total_anc_to    = $total_acount - $total;

      
       // Check if The total the price Items in Greter then the total an acount user Go to the home page
       if($total > $total_acount || $total == 0 || $total_acount == 0)
       {
           echo "User An acount not Error";
           header("location: ../home.php");
       }
       // other wise Do This opration Delete the All orders mob and order ad
       else
       {
            // Query delete the All order mobiles
            $query_del_mob = "DELETE FROM order_mob WHERE id_userorder = '$userid'";
            // Do This Query  Delete All Order Mobiles
            mysqli_query($db,$query_del_mob);  
            // Query delete the All order El.Dive
            $query_del_ad = "DELETE FROM order_ad WHERE id_userad = '$userid'";
            // Do This Query  Delete All Order El.Dive
            mysqli_query($db,$query_del_ad);
            // Udate the total an acount To New total After The sub the total item price
            $query_anc    = "UPDATE anc SET anc.total_user = '$total_anc_to' WHERE anc.id_useracn = '$userid'";
            // Do this Query An Acount 
            mysqli_query($db,$query_anc);
            // GO To The end page 
            header("location: end.php");
       }

    
    
    ?>
</body>
</html>