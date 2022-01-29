<?php 

    include "../server.php";

    $address = $_GET['address'];

    $query  = "SELECT * FROM users WHERE Address = '$address'"; 
   
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_assoc($result);

    $id_user = $row['UserID'];
    
    

?>
    <link rel="stylesheet" href="../layout/css/style.css">
    <form  method="post">

        <label >New Address : </label><br><input  style="width:100%; height:30px; " type="text" name="address"><br><br>
        <button style="width:100%; height:50px; background:deepskyblue; color:white; "  name="done_address">Save</button>
        <button style="width:100%; height:50px; background:deepskyblue; color:white; "  name="Gohome">Home</button>
    
    </form>

    <?php
    if(isset($_POST['done_address']))
    {
        $new_address = "";
        $new_address = $_POST['address'];
        
        $query = "UPDATE users SET Address = '$new_address' WHERE UserID = '$id_user'";
        
        mysqli_query($db, $query);

        header("location: done.php");
    }

    if(isset($_POST['Gohome']))
    {
        header("location: done.php");
    }

?>