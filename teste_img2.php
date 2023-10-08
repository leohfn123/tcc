<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

// Crie uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['imagem']; // Suponha que você esteja passando o ID da imagem pela URL

$sql = "SELECT img_livro FROM livros WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imagem = $row['img_livro'];

    // Define o cabeçalho Content-Type com base no tipo de imagem
    header("Content-Type: image/jpeg"); // Altere para o tipo de imagem correto, se necessário

    // Exibe a imagem
    echo $imagem;
} else {
    echo "Imagem não encontrada.";
}

$conn->close();
?>
