<?php
include("../mysql.php");
$mysql = Mysql::newConnection();

if(validator()){
   $mysql->deleteEmpregado($_POST["id"]);
   echo"<script>
   window.location.href=' http://127.0.0.1/patrao/empregados.php'
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
