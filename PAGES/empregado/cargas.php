
<?php

$conn= mysqli_connect("localhost","root", "", "tpcf");

if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);

}

$sql ="SELECT users.Nome,Origem,Destino,Peso,Carga,Dinheiro FROM  cargas INNER JOIN users ON cargas.UserId = users.id ORDER BY UserId";
$result =$conn -> query($sql);

if($result -> num_rows>0){
  echo"<table>
      <tr>
      <th>Empregado</th>
      <th>Origem</th>
      <th>Destino </th>
      <th>Peso</th>
      <th>Carga</th>
      <th>Dinheiro</th>
      </tr>" ; 
    while($row=$result-> fetch_assoc()){
      
      echo"<tr><td>".$row["Nome"]."</td><td>".$row["Origem"]."</td><td>".$row["Destino"]."</td><td>".$row["Peso"]."t</td><td>".$row["Carga"]."</td><td>".$row["Dinheiro"]."€</td></tr>";
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
    background-color: white;
    
  }    
    
    
  table, td, th {
    border: 0.5px solid black;  
    top:10%;
    color:black;

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

}

th {
    height: 40px;
    top:10%;
    text-align:center;
    
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
                      <a href="cargas.php">CARGAS</a>
                      <a href="empregados.php">EMPREGADOS</a>      
                      <a href="forminserircargas.php">INSERIR CARGAS</a>
                    </div>
</div>







</body>
</html>