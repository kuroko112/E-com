
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/backend.css">
    <title>Home</title>
</head>
    <body>

    <form action="home.php" method="post">  
        
        <div class="con">
            <?php     
                include_once('server.php');
                $username = $_SESSION['username'];
                echo   "<h1 style='text-align:center; color:#440a67;'> Welcome Ramban <br> Welcome " . $username . " in Action Go 4 You </h1>";
            ?>
                <img src="layout/img/ramadan3.jpg">
                <button name="logout">Logout</button>
                <button name="btn"> <a href="https://www.facebook.com/%D9%90A4G-101288948738537/">Facebook</a> </button>
            
        </div>
    
    
        <div class="divmas">
            <div class="div1">
                <button name="gomob" class="mob-back"> <img src="layout/img/mobbackgroundhome.jpg" ><br> mobile</button>

            </div>
            <div class="div2">
                <button name="goelc" > <img src="layout/img/elc.jpg"><br>  <br>Electrical devices<br> . </button> 
            </div>
        
            <div class="div3">
                <button  > <img src="layout/img/33.jpg">.</button> 
            </div>

            <div class="div4">
                <button  name="goshop"> <img src="layout/img/Alc/70.png"><br> . <br> Shopping cart<br>.</button> 
            </div>

        </div>

    </form>
    <?php 

        if(isset($_POST['gomob']))
        {
            header("location: pages/mob.php");
        }

        if(isset($_POST['goelc']))
        {
            header("location: pages/elaev.php");
            
        }
        
        if(isset($_POST['goshop']))
        {
            header("location: pages/showitem.php");
        }

        if(isset($_POST['logout']))
        {
            unset($_SESSION['username']);
            session_destroy();
            header("location:  index.php");
        }
    ?>
    </body>
</html>
