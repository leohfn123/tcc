<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$sql = "INSERT INTO cadastropessoa (nome ,email ,senha )
        VALUES ('$nome','$email', '$senha' )";
if ($conexao->query($sql) === TRUE) {
    echo " foi cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar  " . $conexao->error;
}
$conexao->close();
?>