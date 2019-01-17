<?php
include("mysql.php");
$mysql = Mysql::newConnection();



if(validator()){
   
  $result = $mysql->getLoginAdmin($_POST["email"], $_POST["password"]);
  $result2 = $mysql->getLoginEmpregado($_POST["email"], $_POST["password"]);
  if ($result->num_rows == 1){
     
    echo"<script>
    window.location.href=' http://goncalocruz.pt/projetoFinal/patrao/cargas.php'
    </script>";
   
   }else{

    if($result2->num_rows == 1){
        echo"<script>
        window.location.href=' http://goncalocruz.pt/projetoFinal/empregado/cargas.php'
        </script>";
      }else{
        echo "<script>
        window.location.href=' http://goncalocruz.pt/projetoFinal/Nregistado.html'
        </script>";
   }
} 
      
}else{
    echo"<script>
    window.location.href=' http://goncalocruz.pt/projetoFinal/login.php'
    </script>";
}

function validator()
{
    if(!empty($_POST["email"]) && !empty($_POST["password"])) {
        return true;
    }     
    
    return false;
}
?>
