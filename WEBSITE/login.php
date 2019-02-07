
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Login</h1>
<div id="divLogin">
    <form  action="new_login.php" id="Login" method="POST">
        <div id="divLogusername">Email:</div>
        <input class="textboxLogusername" type="email" name="email">
        <div id="divLogpassword" style="background-color:white;">Password:</div>
        <input class="textboxLogPassword" type="password" name="password">
    </form>
    <button class="buttonlogin2" form="Login" value="Submit">Login</button>
    <button class="buttonRegistar"><a href="registar.php">Registar</button></a>
    
</div>
</body>
</html>