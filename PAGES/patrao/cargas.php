
<?php

$conn= mysqli_connect("localhost","root", "", "tpcf");

if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);

}

$sql ="SELECT cargas.id,users.Nome,Origem,Destino,Peso,Carga,Dinheiro FROM  cargas INNER JOIN users ON cargas.UserId = users.id WHERE cargas.Aproved=\"1\"";

$result =$conn -> query($sql);

if($result -> num_rows>0){
  echo"<table>
      <tr>
      <th>Id</th>
      <th>Empregado</th>
      <th>Origem</th>
      <th>Destino </th>
      <th>Peso</th>
      <th>Carga</th>
      <th>Dinheiro</th>
      </tr>" ; 
    while($row=$result-> fetch_assoc()){
      
      echo"<tr><td>".$row["id"]."</td><td>".$row["Nome"]."</td><td>".$row["Origem"]."</td><td>".$row["Destino"]."</td><td>".$row["Peso"]."t</td><td>".$row["Carga"]."</td><td>".$row["Dinheiro"]."€</td></tr>";
    }

}
else{
  echo "Não existem cargas";
$conn->close();

}

?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
      body {
    margin: 0px;
    font-family: 'segoe ui';
    
  }    
    
  table, td, th {
    border: 0.5px solid black;  
    top:10%;
    color:black;
    background-color:white;

}

table {
    border-collapse: collapse;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    top:10%;
    align-items: center;
    text-align:center;
    float: center;
    background-color:white;
}

th {
    height: 40px;
    top:10%;
    text-align:center;
    background-color:white;
    
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
                    </div>
</div>
</body>
</html>