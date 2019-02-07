<?php
include("mysql.php");
$mysql = Mysql::newConnection();

if(validator()){
  if(!$mysql->emailExists($_POST["email"])){
    $mysql->newEmpregado($_POST["email"],$_POST["password"],$_POST["nome"],$_POST["worldOfTrucks"],$_POST["steam"],$_POST["discord"]);
    echo "<div id=\"divN\">
            <p>Registado com sucesso, aguarde até que seja aprovado como empregado</p>
            </div>
            <img src=\"img/tpcflogo.png\" alt=\"tpcf\" width=\"50%\" height=\"20%\" style=\"left:25%; position: absolute; top:50%; background-color: white;\">
            <button class=\"buttonRegistar\"><a href=\"http://goncalocruz.pt/projetoFinal/login.php\">Voltar ao Login</a></button>";
  
  
  }else{
    echo "<div id=\"divN\">
            <p>Email já registado</p>
            </div>
            <img src=\"img/tpcflogo.png\" alt=\"tpcf\" width=\"50%\" height=\"20%\" style=\"left:25%; position: absolute; top:50%; background-color: white;\">
            <button class=\"buttonRegistar\"><a href=\"http://goncalocruz.pt/projetoFinal/registar.php\">Voltar ao Login</a></button>";
  }

}else{
  echo"<script>
    window.location.href=' 127.0.0.1/projetoFinal/registar.php'
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

<style>
    body{
    background-color: #0095D9;
}
    #divN{
    position:absolute;
    width:90%;
    height:20%;
    top:25%;
    left:4.6%;
    background-color:#0095D9;
    
}

p{
    color:white;
    font-size:30px;
    text-align:center;
    font-weight:bold;
    padding:1px;
    
}

.buttonRegistar{
    position:absolute;
    top:80%;
    left:4.8%;
    width:90%;
    height:10%;
    color:#0095D9;
    font-size: 30px;
    background-color:white;
    text-align:center;
    border: 1px solid white;
}
    a{
        text-decoration: none;
        color:#0095D9;
    }
</style>