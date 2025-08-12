<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM alunos WHERE email = '$email' and senha = '$senha'";

          
        $result = $conn->query($sql);


        if (mysqli_num_rows($result)  < 1)
        {
            header('Location: login.php'); 
            
        }
        else
        {
            header('Location: telainicial.php');
        }

    }
    else
    {
        //nao acessa
        header('location :login.php');
    }



    ?>