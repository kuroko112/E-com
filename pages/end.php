<title>End..</title>
<?php 

    include_once ('../server.php');
    
    $username  = $_SESSION['username'];
    $query     = "SELECT * FROM users WHERE username = '$username'";
    // featch  user from database
    $result    = mysqli_query($db, $query);
    $row_user  = mysqli_fetch_assoc($result);  
    $address  =  $row_user['Address'];
    $username = $row_user['fullname'];

    // import  mandob from where id_man = random number

    $id_ran    =  rand(1,4);
    $query_man  = "SELECT * FROM mandob WHERE id_man = '$id_ran'";
    $result_man     = mysqli_query($db, $query_man);
    $row = mysqli_fetch_assoc($result_man);
    $name_man = $row['fullname_man'];
    $phone_man = $row['phone_man']
    

?>
<h1 style="text-align:center">operation accomplished successfully</h1>
<h3 style="text-align:center">Thank you for your shopping and we will be as good as you think</h3>
<h1>Number of Bill : <?php echo rand(505465,3600013); ?></h1>

<h1>User Info</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<table class="table table-bordered">
    
<tr style="background:deepskyblue; color:white;">
        <td>Name user</td>
        <td>Address</td>
    </tr>

    <tr>
        <td> <?php echo $username?> </td>
        <td> <?php echo $address ?> </td>
    </tr>
</table> <br><br>

<h1>sales person Info</h1>
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<table class="table table-bordered">
    <tr style="background:deepskyblue; color:white;">
        <td>Name sales person</td>
        <td>Phone</td>
    </tr>

    <tr>
        <td> <?php echo $name_man?> </td>
        <td> <?php echo $phone_man ?> </td>
    </tr>

</table>

<form  method="post">

  <button style="width:100%; height: 50px; color:white; background: deepskyblue;" name="Gohome">Done</button>

</form>

<?php 

    if(isset($_POST['Gohome']))
    {
        header("location: ../home.php");
    }


?>