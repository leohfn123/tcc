<?php
// Conexão com o banco de dados (substitua pelas suas informações)

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para listar os livros
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Livros</h1>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nome_livro"] . " - " . $row["autor"] . " - " . $row["img_livro"] ."-". $row["descricao_livro"] . " <a href='editar.php?id=" . $row["id"] . "'>Editar</a> <a href='excluir.php?id=" . $row["id"] . "'>Excluir</a></li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum livro encontrado.";
}

$conn->close();
?>
