<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão com o banco de dados (substitua pelas suas informações)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tcc-biblioteca';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "DELETE FROM livros WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Livro excluído com sucesso. <a href='index.php'>Voltar para a lista</a>";
    } else {
        echo "Erro na exclusão do livro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do livro não fornecido.";
}
?>
