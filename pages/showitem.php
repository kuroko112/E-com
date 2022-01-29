<?php 
	
	include_once('../server.php');
	
	echo "<h1 style='text-align:center'>  Shopping Cart </h1> <br>";

	$username = $_SESSION['username'];
?>


<link rel="stylesheet" href="../layout/css/style.css">

<form  method="post">
	<button style="width:100%; height: 50px; color:black; background: orange;"  name="show_mob"> Show Orders Mobile</button><br>
	<button style="width:100%; height: 50px; color:black; background: orange;"  name="show_ad">  Show Orders Electrical devices</button><br>
	<button style="width:100%; height: 50px; color:black; background: orange;"  name="Gogome">   Home</button><br>
	<button style="width:100%; height: 50px; color:black; background: orange;"  name="hide">     Hide</button><br>
	<button style="width:100%; height: 50px; color:black; background: orange;" name="done">Done</button>
</form>

<?php 

	if(isset($_POST['show_mob']))
	{
		$query    = "SELECT * FROM users where username = '$username'";
		$result   = mysqli_query($db, $query); 
		$row_user = mysqli_fetch_assoc($result);
		$id_user  = "";
		$id_user  = $row_user['UserID']; 
		$query_order = "SELECT * FROM users

		JOIN order_mob On order_mob.id_userorder = users.UserID
		JOIN mob       ON  mob.id_mob = order_mob.id_mob_order
		WHERE users.UserID = '$id_user'";

		$result = mysqli_query($db, $query_order);
		?>
		<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
        <table class="table table-bordered">

			<tr style="background:deepskyblue; color:white;">
				<td>Name </td>
				<td>Price </td>
				<td>Delete</td>
			</tr>

			<?php 
			
				while($row = mysqli_fetch_assoc($result)){
			?>

			<tr>
				<td> <?php echo $row['name_mob']?> </td>
				<td> <?php echo $row['price_mob']?> </td>
				<td><a href="del_mob.php?id=<?php echo $row['id_order_mob']; ?>">Delete item</a></td>
			</tr>

			<?php }?>
		</table>
		
		
		<?php
	}

	if(isset($_POST['show_ad']))
	{
		$query    = "SELECT * FROM users where username = '$username'";
		$result   = mysqli_query($db, $query); 
		$row_user = mysqli_fetch_assoc($result);
		$id_user  = "";
		$id_user  = $row_user['UserID']; 

		$query_order = "SELECT * FROM users
		JOIN order_ad ON order_ad.id_userad = users.UserID
		JOIN ad       ON ad.id_ad = order_ad.id_adorder
		WHERE users.UserID = '$id_user'";
		$result = mysqli_query($db, $query_order);
		
		?>
		<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
        <table class="table table-bordered">

			<tr style="background:deepskyblue; color:white;">
				<td>Name </td>
				<td>Price </td>
				<td>Delete</td>
			</tr>

			<?php 
			
				while($row = mysqli_fetch_assoc($result)){
			?>

			<tr>
				<td> <?php echo $row['name_ad']?> </td>
				<td> <?php echo $row['price_ad']?> </td>
				<!-- id_order_ad -->
				<td><a href="del_ad.php?id=<?php echo $row['id_ad']; ?>">Delete item</a></td>
			</tr>


			<?php }?>
		</table>
		
		
		<?php
	}

	

	if(isset($_POST['done']))
	{
		header("location: done.php");
	}





	if(isset($_POST['Gogome'])) { header("location: ../home.php"); }



?>