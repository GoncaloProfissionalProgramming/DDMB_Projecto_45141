<?php
include("../mysql.php");
$mysql = Mysql::newConnection();


if(validator()){
   $mysql->aproveCarga($_POST["id"]);
   echo"<script>
    window.location.href=' 127.0.0.1/patrao/AproveCargas.php'
    </script>";
}

      
     
     
function validator()
{
   if(
      !empty($_POST["id"])
      
   ) {
       return true;
   }     
   
   return false;
}  




?>