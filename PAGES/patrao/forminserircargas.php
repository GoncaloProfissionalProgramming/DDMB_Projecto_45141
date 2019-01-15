<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/inserircarga.css">
<link rel="stylesheet" href="../css/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
      body {
    margin: 0px;
    font-family: 'segoe ui';
    
  }    
    

</style>
<body>

<div class="nav">
                    <div class="nav-header">
                      <div class></div>
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
<h1>Registar Carga</h1>
<div id="divRegistar">
<form action="forminserircargas2.php" id="insert" method="post">

<div id="divId"><label for="UserId">Nº de empregado:</div></label>
<input class="textboxId" type="text" name="UserId" maxlength="50" size="30">

<div id="divOrigem"><label for="Origem">Origem:</div></label>
<input class="textboxOrigem" type="text" name="Origem" maxlength="50" size="30">

<div id="divDestino"><label for="Destino">Destino:</div></label>
<input class="textboxDestino" type="text" name="Destino" maxlength="50" size="30">

<div id="divPeso"><label for="Peso">Peso:</div></label>
<input class="textboxPeso" type="text" name="Peso" maxlength="50" size="30">

<div id="divCarga"><label for="Carga">Carga:</div></label>
<input class="textboxCarga" type="text" name="Carga" maxlength="50" size="30">

</form>
<button class="buttonRegistar" form="insert" action="submit">Enviar</button>

</div>
</body>
</html>