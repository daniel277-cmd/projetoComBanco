<?php 

if(isset($_POST['submit']))
{


include_once ('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];
$data_nascimento =  $_POST['data_nascimento'];

$result = mysqli_query($conn, "INSERT INTO alunos(nome,email,telefone,curso,senha,sexo,data_nasc) 
VALUES ('$nome','$email','$telefone','$curso','$senha','$genero','$data_nascimento')"); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(80, 80, 189), rgb(6, 11, 73));
            
        }
        .box{
            color: white;
            position: absolute;
            top : 50%;
            left :50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;  
        }
        fieldset{
            border: 3px solid;
        }
        legend{
            border: 1px solid linear-gradient(to right, rgb(80, 80, 189), rgb(6, 11, 73));
            padding: 10px ;
            text-align: center;
            background-color: rgb(49, 49, 189);
            border-radius: 10px;
        }
            .inputBox{
             position: relative;
         }
         .inputUser{
            border: none;
            background: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
         }
         .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
           pointer-events: none;
            transition: .5s;
         }
         .inputUser:focus ~ .labelInput,
         .inputUser:valid~.labelInput{
            top: -20px;
            font-size: 12px;
            color: blue;
         }
         #data_nascimento{
            border: none;
            padding: 5px;
            border-radius: 5px;
            outline: none;
            font-size: 13px;
         }
         #submit{
            background-image: linear-gradient(to right, rgb(80, 80, 189), rgb(6, 11, 73));
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            color: white;
            
         }
      
    </style>
</head>
<body>
     <a href="home.php">Voltar</a>
    <div class = "box">
    <form action="formulario.php" method="POST">
        <fieldset>
            <legend>
                <b>Formulario do Aluno</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name = "nome" id="nome" class ="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                    <br><br>      

                </div>
                <div class="inputBox">
                <input type="text" name = "email" id="email" class ="inputUser" required>
                <label for="email"class="labelInput">Email</label>
                <br><br>

                <div class="inputBox">
                    <input type="text" name = "telefone" id="telefone" class ="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                    <br><br>      

                    <div class="inputBox">
                    <input type="text" name = "curso" id="curso" class ="inputUser" required>
                    <label for="curso" class="labelInput">Curso</label>
                    <br><br>      

                    <div class="inputBox">
                    <input type="password" name = "senha" id="senha" class ="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                    <br><br>    

                </div>

                </div>

                </div>
                <p>Sexo</p>
                <input type="radio" id= "feminino" name= "genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" id= "masculino" name= "genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                
                <input type="radio" id= "outro" name = "genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                    <label for="data_nascimento"><b>Ano de Nascimento:</b></label>
                    <input type="date" name = "data_nascimento" id="data_nascimento"  required>
                    <br><br>
            
                <input type="submit" name="submit" id="submit">

        </fieldset>

    </form>

    </div>

</body>
</html>