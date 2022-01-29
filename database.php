<?php
   $servername='localhost';
   $username='root';
   $password='789456123258';
   $dbname = "uni";
   $db=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$db){
      die('Could not Connect My Sql:' .mysql_error());
   }
   

?>