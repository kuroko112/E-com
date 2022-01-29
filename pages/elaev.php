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
    <h1 style="text-align:center;">Electrical devices</h1>
    <form  method="post">
        <h3>Fridge : </h3>
        <button   name="b1"> <img src="../layout/img/Alc/1.jpg"><br> Uinioair RS <br> Price 3,000 LE <br> .</button>  
        <button   name="b2"> <img src="../layout/img/Alc/2.jpg"><br> Uinioair RD <br> Price 4,000 LE <br> .</button>
        <button   name="b3"> <img src="../layout/img/Alc/3.jpg"><br> Alaska   Db <br> price 2,700 LE <br> <del>Price 3,000 LE</del></button>
        <button   name="b4"> <img src="../layout/img/Alc/4.jpg"><br> Kriazi  E335<br> Price 6,570 LE <br> .</button>
        <hr>
        <h3>Clothes washing machines :  </h3>
        <button   name="b5"> <img src="../layout/img/Alc/5.jpg"><br> Washing WPW <br> Price 3,500 LE</button>
        <button   name="b6"> <img src="../layout/img/Alc/6.jpg"><br> Washing AEW <br> Price 3,666 LE</button>
        <button   name="b7"> <img src="../layout/img/Alc/7.jpg"><br> Washing STE <br> Price 6,699 LE</button>
        <button   name="b8"> <img src="../layout/img/Alc/8.jpg"><br> Washing ADB <br> Price 3,989 LE</button>
        <hr>
        <h3>Water cooler : </h3>
        <button   name="b9"> <img src="../layout/img/Alc/13.jpg"><br> Cooler BF20 <br> Price 2,080 LE <br> <del>Price 2,599 LE</del> </button>
        <button   name="b10"> <img src="../layout/img/Alc/14.jpg"><br> Cooler BT20 <br> Price 2,320 LE <br> <del> Price 2,900 LE </del> </button>
        <button   name="b11"> <img src="../layout/img/Alc/15.jpg"><br> Cooler WPWD <br> Price 3,799 LE <br> . </button>
        <button   name="b12"> <img src="../layout/img/Alc/16.jpg"><br> Cooler AKAI <br> Price 1,699 LE <br> . </button>
    </form>
        




    <?php 
    
    
    if(isset($_POST['b1']))
    {
        $id_ad  = 1;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',  '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b2']))
    {
        $id_ad  = 2;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',  '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b3']))
    {
        $id_ad  = 3;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',  '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b4']))
    {
        $id_ad  = 4;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',  '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b5']))
    {
        $id_ad  = 5;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',  '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b6']))
    {
        $id_ad  = 6;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b7']))
    {
        $id_ad  = 7;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b8']))
    {
        $id_ad  = 8;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b9']))
    {
        $id_ad  = 9;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b10']))
    {
        $id_ad  = 10;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b11']))
    {
        $id_ad  = 11;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }
    
    
    
    if(isset($_POST['b12']))
    {
        $id_ad  = 12;
        $id_user = ""; 
        $query  = "SELECT UserID FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        $id_user = $row['UserID'];
        $query_insert = "INSERT INTO order_ad (id_userad, id_adorder) VALUES ('$id_user',   '$id_ad')";
        mysqli_query($db,$query_insert);
    }

    
    ?>



</html>