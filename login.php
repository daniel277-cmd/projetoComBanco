<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
             background-image: linear-gradient(to right, rgb(80, 80, 189), rgb(6, 11, 73));
        }
        div {
           background-color: rgba(0, 0, 0, 0.8);
           position: absolute;
           top : 50%;
           left :50%;
           transform: translate(-50%, -50%);
           padding: 80px;
           border-radius: 20px;
           color: white;
        }
       input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        
    </style>
</head>
<body>

        <a href="home.php">Voltar</a>
    <div>

        <h1>LOGIN</h1>
        <form action="testeLogin.php" method="POST">
            <br><br>
        <input type="text" name = "email" placeholder="Email">
        <br><br>
        <input type="password" name = "senha" placeholder="Senha">
        <br><br>
   <input class="inputSubmit" type="submit" name="submit" value="Enviar">
</form>
    </div>
    
</body>
</html>