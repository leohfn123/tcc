
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
    echo "Livro foi concluido com  sucesso!";
} else {
    echo "Erro ao cadastrar o livro: " . $conexao->error;
}
$conexao->close();


?>

<a href="livroquadrinhos_biblioteca.php" class="btn btn-primary" >click para ir ao site</a>