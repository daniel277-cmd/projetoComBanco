<!DOCTYPE html>
<head>
    <title>Tela de Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(80, 80, 189), rgb(6, 11, 73));
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 35px;
            border-radius: 15px;
           
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid blue;
            border-radius: 10px;
            padding: 5px;
        }
        a:hover{
                background-color: blue;
        }
    
    </style>
</head>

<body>
    <div class = "box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>