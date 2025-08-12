<?php
$servidor = "localhost"; // Servidor MySQL
$usuario = "root";       // Usuário padrão no XAMPP/WAMP
$senha = "";             // Senha (no XAMPP normalmente é vazia)
$banco = "estudos"; // Nome do banco que você criou

// Criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);
/*
if($conn->connect_errno)
{
    echo "error";
}
else
{
    echo 'boa';
}
*/
?>
