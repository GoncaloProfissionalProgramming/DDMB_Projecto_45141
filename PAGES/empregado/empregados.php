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
    top:30%;
    color:black;
    background-color:white;
}

table {
    border-collapse: collapse;
    width: 95%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    top:30%;
    align-items: center;
    text-align:center;
    float: center;
    background-color:white;

}

th {
    height: 40px;
    text-align:center;
    top:30%;
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
                      <a href="cargas.php">CARGAS</a>
                      <a href="empregados.php">EMPREGADOS</a>      
                      <a href="forminserircargas.php">INSERIR CARGAS</a>
                       <a href="../login.php">LOG OUT</a>
                    </div>
</div>
<table>
<tr>
<th> Nome</th>
<th> World Of Trucks </th>
<th> Steam</th>
<th> Discord</th>
</tr>

<?php
$conn= mysqli_connect("localhost", "goncalo8_goncaloprofissional", "Goncaloprofissional99", "goncalo8_tpcf");

if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);

}

$sql ="SELECT Nome,WorldOfTrucks,Steam,Discord from users where Aproved=\"1\"; ";
$result =$conn -> query($sql);

if($result -> num_rows>0){
    while($row=$result-> fetch_assoc()){
        echo"<tr><td>".$row["Nome"]."</td><td>".$row["WorldOfTrucks"]."</td><td>".$row["Steam"]."</td><td>".$row["Discord"]."</td></tr>";
    }
    echo"</table>";
}
else{
$conn->close();
}




?>
</table>


</body>
</html>