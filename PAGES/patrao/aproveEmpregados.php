<?php
include("../mysql.php");
$mysql = Mysql::newConnection();


if(validator()){
   $mysql->aproveEmpregado($_POST["id"]);
   echo"<script>
    window.location.href=' 127.0.0.1/projetoFinal/patrao/empregadosporAprovar.php'
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