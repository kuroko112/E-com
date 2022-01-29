<?php 

    include_once ('../server.php');
    $username  = $_SESSION['username'];
    $query     = "SELECT * FROM users WHERE username = '$username'";
    $result    = mysqli_query($db, $query);
    $row_user  = mysqli_fetch_assoc($result);
    $userid    =  $row_user['UserID'];  
    $query_mob = "SELECT * FROM users 
    JOIN order_mob ON order_mob.id_userorder = users.UserID
    JOIN mob       ON mob.id_mob = order_mob.id_mob_order
    WHERE users.UserID = '$userid'";
    $result_mob = mysqli_query($db, $query_mob);
    // -------------------------------------------------------------
    $query_ad = "SELECT * FROM users 
    JOIN order_ad ON order_ad.id_userad = users.UserID
    JOIN ad       ON ad.id_ad = order_ad.id_adorder
    WHERE users.UserID = '$userid'";
    $result_ad = mysqli_query($db, $query_ad);
    
    $total =  0;
    
    $total_ad = 0;
    
    


?>
<h1 style="text-align:center"> receipt </h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<table class="table table-bordered">
			        
            <h1>Mobile : </h1>
            <tr style="background:deepskyblue; color:white;">
                <td>Name</td>
                <td>Price</td>
                
            </tr>
            <?php 
            
            while($row_mob = mysqli_fetch_assoc($result_mob)){
                $total += $row_mob['price_mob'];
            ?>
            <tr>
                <td> <?php echo $row_mob['name_mob']?> </td>
                <td> <?php echo $row_mob['price_mob']?> </td>
                
            </tr>
            
            <?php }?>
            <tr style="background:deepskyblue; color:white;">
                <td colspan="4">Final price after the mobile discount : <?php echo $total?></td>
            </tr>
</table>
<br><br>

<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<table class="table table-bordered">
                                    
    <h1>Electrical devices : </h1>
    <tr style="background:deepskyblue; color:white;">
        <td>Name </td>
        <td>Price </td>
        
    </tr>
    <?php 

while($row_ad = mysqli_fetch_assoc($result_ad)){
            $total_ad += $row_ad['price_ad'];
            $total += $row_ad['price_ad'];
            ?>

    <tr>
        <td> <?php echo $row_ad['name_ad']?> </td>
        <td> <?php echo $row_ad['price_ad']?> </td>
        
    </tr>
    <?php }?>
    <tr style="background:deepskyblue; color:white;">
        <td colspan="4"> Final price after discount for electrical appliances :  <?php echo $total_ad; ?> </td>
    </tr>
            
                
</table>



<h1> Total : <?php echo $total?></h1>

<h1> We send This Item In The Address : <?php echo $row_user['Address'];?>  <a href="upaddress.php?address=<?php echo $row_user['Address']; ?>">Update Address</a></h1> 

<form  method="post">
    <button  style="width:25%; height:50px; background:deepskyblue; color:white;" name="Gohome"> <- </button>
    <button  style="width:50%; height:50px; background:deepskyblue; color:white;" name="done">OK</button>
</form>

<?php 

    if(isset($_POST['done']))
    {
         

        header("location: acount.php");
    }

    if(isset($_POST['Gohome']))
    {
        header("location: showitem.php");
    }

?>