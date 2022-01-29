<?php     
    include_once('../server.php');
    $username = $_SESSION['username'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/backend.css">
    <title>Document</title>
</head>
    
    <body>
    <a href="../home.php">Home</a>
    <h1 style="text-align:center;">Mobile page</h1>
    <form  method="post">
        <h3>Apple iphone : </h3>
        <button   name="b1"> <img src="../layout/img/iphone12.jpg"><br>  Apple  iphone 12 <br> Price 20,500 LE</button>  
        <button   name="b2"> <img src="../layout/img/iphonexr.jpg"><br>  Apple  iphone XR <br> Price 10,750 LE</button>  
        <button   name="b3"> <img src="../layout/img/iphone11.jpg"><br>  Apple  iphone 11 <br> Price 11,999 LE</button>  
        <button   name="b4"> <img src="../layout/img/iphonexs.jpg"><br>  Apple  iphone XS <br> Price 11,000 LE</button>  
        <hr> Apple
        <h3>Samsung : </h3>
        <button   name="b"> <img src="../layout/img/samsungs20.jpg"><br>  Samsung  S20 <br> Price 9,370 LE</button>
        <button   name="b6"> <img src="../layout/img/samsungsa51.jpg"><br> Samsung  A51 <br> Price 4,199 LE</button>
        <button   name="b7"> <img src="../layout/img/samsungm51.jpg"><br>  Samsung  M51 <br> Price 5,999 LE</button>
        <button   name="b8"> <img src="../layout/img/samsunga02.jpg"><br>  Samsung  A02 <br> Price 1,805 LE</button>
        <hr>
        <h3>Honor : </h3>
        <button   name="b9"> <img src="../layout/img/honorgx.jpg"><br>   Honor  9X <br> Price 3,377 LE</button>
        <button   name="b10"> <img src="../layout/img/honor20.jpg"><br>  Honor  20 <br> Price 2,879 LE</button>
        <button   name="b11"> <img src="../layout/img/honor8c.jpg"><br>  Honor  8C <br> Price 3,999 LE</button>
        <button   name="b12"> <img src="../layout/img/honor8x.jpg"><br>  Honor  8X <br> Price 3,759 LE</button>
    </form>
        




    <?php 
    
    
    if(isset($_POST['b1']))
    {
        $id_mob  = 1;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }

    if(isset($_POST['b2']))
    {
        $id_mob  = 2;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }

    if(isset($_POST['b3']))
    {
        $id_mob  = 3;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }

    if(isset($_POST['b4']))
    {
        $id_mob  = 4;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }

    if(isset($_POST['b5']))
    {
        $id_mob  = 5;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    if(isset($_POST['b6']))
    {
        $id_mob  = 6;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    if(isset($_POST['b7']))
    {
        $id_mob  = 7;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    if(isset($_POST['b8']))
    {
        $id_mob  = 8;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b9']))
    {
        $id_mob  = 9;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b10']))
    {
        $id_mob  = 10;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b11']))
    {
        $id_mob  = 11;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b12']))
    {
        $id_mob  = 12;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_mob (id_userorder, id_mob_order) VALUES ('$id_user','$id_mob')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    
    
    










    ?>



</html>