<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$tema_livro = $_POST['tema_do_livro'];
$nome = $_FILES['imagem']['name'];
$destino = "img/$nome";
$origem =  $_FILES['imagem']['tmp_name'];
$resultado = move_uploaded_file($origem, $destino);
if($resultado){
echo" O cadatro do ";
}
else{
    echo "errado";
}
$sql = "INSERT INTO livros (nome_livro,autor ,descricao_livro ,img_livro ,tipo_do_livro)
        VALUES ('$titulo','$autor', '$descricao', '$nome', '$tema_livro' )";

if ($conexao->query($sql) === TRUE) {
    echo "Livro foi cadastrado com  sucesso!";
} else {
    echo "Erro ao cadastrar o livro: " . $conexao->error;
}
$conexao->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de livro</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<br>
<center>
<a href="adiciona_livros.php" class="btn btn-primary" >Deseja adicionar outro livro?</a><br>
<br>
<a href="livrosgeral_biblioteca.php" class="btn btn-primary">Ir a biblioteca</a>

<a href="tela_principal.php" class="btn btn-outline-danger">Sair para tela inicial</a>

</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
