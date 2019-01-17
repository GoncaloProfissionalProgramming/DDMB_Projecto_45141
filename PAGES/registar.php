<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">


<link rel="stylesheet" href="css/registar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Registar</h1>
<div id="divRegistar">
          <p>Atenção os dados inseridos não poderão ser alterados</p> 
    <form action="new_registar.php" id="Registar" method="post">
        <div id="divEmail"><label for="Nome">Email:</div></label>
        <input class="textboxEmail" type="text" name="email" maxlength="50" size="30">
        <div id="divPassword"><label for="Nome">Password:</div></label>
        <input class="textboxPassword" type="text" name="password" maxlength="50" size="30">
        <div id="divNome"><label for="Nome">Nome:</div></label>
        <input class="textboxNome" type="text" name="nome" maxlength="50" size="30">
        <div id="divWOT"><label for="Nome">World Of Trucks:</div></label>
        <input class="textboxWOT" type="text" name="worldOfTrucks" maxlength="50" size="30">
        <div id="divSteam"><label for="Nome">Steam:</div></label>
        <input class="textboxSteam" type="text" name="steam" maxlength="50" size="30">
        <div id="divDiscord"><label for="Nome">Discord: <br> Exemplo: #4644  </div></label>
        <input class="textboxDiscord" type="text" name="discord" maxlength="50" size="30">
    </form>
    <button class="buttonRegistar" form="Registar" action="submit">Registar</button>
</div>
</body>
</html>