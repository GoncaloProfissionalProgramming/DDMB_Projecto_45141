<?php
include("mysql.php");
$mysql = Mysql::newConnection();

if(validator()){
  if(!$mysql->emailExists($_POST["email"])){
    $mysql->newEmpregado($_POST["email"],$_POST["password"],$_POST["nome"],$_POST["worldOfTrucks"],$_POST["steam"],$_POST["discord"]);
    echo "User Registado";
  }else{
    echo "email já registado";
  }

}else{
  echo"<script>
    window.location.href=' http://127.0.0.1/registar.php'
    </script>";
}

      
     
     
function validator()
{
   if(
      !empty($_POST["email"])
      && !empty($_POST["password"])
      && !empty($_POST["nome"])
      && !empty($_POST["worldOfTrucks"])
      && !empty($_POST["steam"])
      && !empty($_POST["discord"])
   

      
   ) {
       return true;
   }     
   
   return false;
}  




?>