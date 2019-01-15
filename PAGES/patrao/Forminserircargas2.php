
<?php
 include("../mysql.php");
 $mysql = Mysql::newConnection();

if(validator()){
    $mysql->inserirCarga($_POST["UserId"], $_POST["Origem"], $_POST["Destino"], $_POST["Peso"], $_POST["Carga"]);
    echo"<script>
    window.location.href=' http://goncalocruz.pt/projetoFinal/patrao/AproveCargas.php'
    </script>";
}else{
  echo"<script>
  window.location.href=' http://goncalocruz.pt/projetoFinal/patrao/forminserircargas.php'
  </script>";
}

       
      
      
function validator()
{
    if(
       !empty($_POST["UserId"])
       && !empty($_POST["Origem"])
       && !empty($_POST["Destino"]) 
       && !empty($_POST["Peso"])
       && !empty($_POST["Carga"]) 


    ) {
        return true;
    }     
    
    return false;
}  


?>