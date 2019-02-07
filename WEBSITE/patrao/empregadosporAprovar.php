

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<link rel="stylesheet" href="../css/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
@media screen and (max-width: 500px) {
         
    img{
        position:absolute;
        width:50% !important;
        height:20%;
        left:25% !important;
        top:50%;
        background-color:white;
    }
}

    img{
        position:absolute;
        width:20%;
        height:20%;
        left:40%;
        top:50%;
        background-color:white;
    }
    
    body {
    margin: 0px;
    font-family: 'segoe ui';
    
  }    
    
  table, td, th {
    position:relative;
    border: 0.5px solid black;  
    top:25%;
    color:black;
}
table {
    position:relative;
    border-collapse: collapse;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    top:25%;
    align-items: center;
    text-align:center;
    float: center;

}
th {
    position:relative;
    height: 40px;
    text-align:center;
    top:25%;
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
    font-size:19px;
    text-align:center;
    font-weight:bold;
    padding:16px;
    
}


#divId{
    position:absolute;
    top:3%;
    left:5%;
    
    color:white;
}

.textboxId{
    position:absolute;
    top:27%;
    left:10%;
    width:80%;
    height:20%;
    
}

.buttonEnviar{
    position:absolute;
    top:60%;
    left:10%;
    width:80%;
    height:30%;
    color:#0095D9;
    font-size: 19px;
    background-color:white;
    text-align:center;
    border: 1px solid white;
    
}

#divDespedir{
    position:absolute;
    width:90%;
    height:20%;
    top:8%;
    left:4.6%;
    background-color:#0095D9;
    
}

form input {
    border: 1px solid white;
} 
</style>
<body>

<div class="nav">
                    <div class="nav-header">
                      <div class="nav-title">
                      TPCF APP
                      </div>
                    </div>
                    <div class="nav-btn">
                      <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                      </label>
                    </div>
                    <input type="checkbox" id="nav-check">
                    <div class="nav-links">
                      <a href="cargas.php">CARGAS EMPREGADOS</a>
                      <a href="AproveCargas.php">CARGAS POR APROVAR</a>
                      <a href="forminserircargas.php">INSERIR CARGAS</a>
                      <a href="empregados.php">EMPREGADOS</a>
                      <a href="empregadosporAprovar.php">EMPREGADOS POR APROVAR</a>
                       <a href="../login.php">LOG OUT</a>
                    </div>
</div>




<?php
$conn= mysqli_connect("localhost", "root", "", "tpcf");

if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);

}

$sql ="SELECT id,Nome,WorldOfTrucks,Steam,Discord from users where Aproved=\"0\"; ";
$result =$conn -> query($sql);

if($result -> num_rows>0){
    echo"<div id=\"divDespedir\">
    
    <form action=\"aproveEmpregados.php\" id=\"aprove\" method=\"post\">
    <div id=\"divId\"><label for=\"Nome\">Empregado:</div></label>
    <input class=\"textboxId\" type=\"text\" name=\"id\" maxlength=\"50\" size=\"30\">
     
    </form>
    <button class=\"buttonEnviar\" form=\"aprove\" action=\"submit\">Aprovar</button>
    </div>
    ";
        echo"
        <table>
        <tr>
        <th> Id</th>
        <th> Nome</th>
        <th> World Of Trucks </th>
        <th> Steam</th>
        <th> Discord</th>
        </tr>";
    while($row=$result-> fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["Nome"]."</td><td>".$row["WorldOfTrucks"]."</td><td>".$row["Steam"]."</td><td>".$row["Discord"]."</td></tr>";
    }
   echo"</table>";
}
else{
    echo "<div id=\"divN\">
    <p><br>Não existem empregados por Aprovar </p>
    </div>
    <img src=\"../img/tpcflogo.png\" alt=\"tpcf\">";
$conn->close();
}

?>
</body>
</html>