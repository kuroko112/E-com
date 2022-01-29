<title>Delete Electrical devices</title>
<?php 
    include_once('../server.php');
    // Delete The ITem From Get Functions
    echo "<h1 style='text-align:center'>"."Delete Items " ."</h1>" ;    
    $id_ad = $_GET['id'];
    $query = "SELECT * FROM ad where id_ad = '$id_ad'";
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
        <tr>
            <td> <?php echo $row['name_ad']; ?> </td>
            <td> <?php echo $row['price_ad']; ?> </td>
            <td> <button  style="width:100%; background:deepskyblue; color:white;" name="del">X</button> </td>
        </tr>
    </table>
    <button name="Gohome" style="background:deepskyblue; color:white;">Home</button>
</form>
   
<?php 

    if(isset($_POST['del']))
    {
        $query_del = "DELETE FROM order_ad WHERE id_adorder = '$id_ad'";
        mysqli_query($db, $query_del);
        header("location: showitem.php");
    }

    if(isset($_POST['Gohome']))
    {
        header("location: showitem.php");
    }

?>