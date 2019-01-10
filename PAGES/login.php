
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
    font-size: 19px;
    background-color:#0095D9;
  }  
  a{
    text-decoration: none;
    color:White;
}  
    
 
#divLogusername{
    position:absolute;
    top:10%;
    left:5%;
    background-color:white;
}

.textboxLogusername{
    position:absolute;
    top:19%;
    left:10%;
    width:80%;
    height:10%;
    background-color:white;
}
#divLogPassword{
    position:absolute;
    top:33%;
    left:5%;
    background-color:white;
}

.textboxLogPassword{
    position:absolute;
    top:42%;
    left:10%;
    width:80%;
    height:10%;
    background-color:white;
}

.buttonlogin2{
    position:absolute;
    top:60%;
    left:10%;
    width:80%;
    height:10%;
    color:white;
    font-size: 19px;
    background-color:#0095D9;
    text-align:center;
    border:none;
}

.buttonRegistar{
    position:absolute;
    top:75%;
    left:10%;
    width:80%;
    height:10%;
    color:white;
    font-size: 19px;
    background-color:#0095D9;
    text-align:center;
    border:none;
}

#divLogin{
    position:absolute;
    width:90%;
    height:50%;
    top:25%;
    left:4.6%;
    background-color:white;
    border-radius:15%; 

}

h1{
    position:absolute;
    text-align:center;
    color:White; 
    top:5%;
    width:100%;
}

form input {
    border: 1px solid #0095D9;
}
</style>
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