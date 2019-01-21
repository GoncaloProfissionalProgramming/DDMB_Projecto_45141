<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
    body{
        background-color: #0095D9;
    }
    a{
    text-decoration: none;
    color: #0095D9;
    background-color: white;
    }
    h2{
        color:white; 
        left:45.5%; 
        position:absolute;
        top:30%;
    }
    .button{
        position: absolute; 
        background-color:white; 
        left:36%; 
        top:70%; 
        height:5%;
        width:25%;
        text-align: center; 
        border-radius:50%; 
        border: none;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        vertical-align: center;
        margin: 4px 2px;
    }
    img{
        left:38.5%; 
        position: absolute; 
        top:40%; 
        background-color: white;
        width:20%; 
        height:20%;
    }

    @media screen and (max-width: 600px) {
    
        .button{
        position: absolute; 
        background-color:white; 
        left:25%; 
        top:70%; 
        height:5%;
        width:50%;
        text-align: center; 
        border-radius:50%; 
        border: none;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        vertical-align: center;
        margin: 4px 2px;
        }
        
        img{
            left:25%; 
            position: absolute; 
            top:40%; 
            background-color: white;
            width:50%; 
            height:20%;
        }

        h2{
        color:white; 
        left:36%; 
        position:absolute;
        top:30%;
        }
    }
    
    </style>
    <body>
    <h2 style="">TPCF APP</h2>
    <img src="../img/tpcflogo.png" alt="tpcf" class="img">
    <button class="button"><a href="login.php">LOGIN</a></button>
    </body>
</html>