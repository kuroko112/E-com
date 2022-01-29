<?php 
    include ('../server.php');
    echo "<h1 style='text-align:center'>"."Delete Items " ."</h1>" ;
    // Delete The ID El.Div 
    $id_order_mob = $_GET['id'];
    $query = "SELECT * FROM order_mob 

    JOIN users ON users.UserID = order_mob.id_userorder
    
    JOIN mob   ON mob.id_mob   = order_mob.id_mob_order
    
    WHERE  order_mob.id_order_mob = '$id_order_mob'";
    
    $reuslt = mysqli_query($db, $query);

    $row = mysqli_fetch_array($reuslt);

    ?>
<form  method="post">
    
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
    <table class="table table-bordered">
        
        <tr style="background:deepskyblue; color:white;">
            <td>Name</td>
            <td>Price</td>
            <td>Delete</td>
        </tr>
        <!-- fetch The data To delete This items  -->
        <tr>
            <td> <?php echo $row['name_mob']?> </td>
            <td> <?php echo $row['price_mob']?> </td>
            <td> <button  style="width:100%; background:deepskyblue; color:white;" name="del">X</button> </td>
        </tr>
        
    </table>
    <button name="Gohome" style="background:deepskyblue; color:white;">Home</button>
    
</form>
   
<?php 
    // if post is buuton delete Do This Query That Delete Item And Go To The show Item Agine 
    if(isset($_POST['del']))
    {
        // 
        // $query_mob_del = "SELECT * FROM ";
        $query_del = "DELETE FROM order_mob WHERE id_order_mob = '$id_order_mob'";
        mysqli_query($db, $query_del);
        header("location: showitem.php");
    }

    if(isset($_POST['Gohome']))
    {
        header("location: showitem.php");
    }


?>

    


