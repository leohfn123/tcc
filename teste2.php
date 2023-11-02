<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$randomQuery = "SELECT * FROM livros ORDER BY RAND() LIMIT 5"; // Consulta para selecionar 5 livros aleatórios
$randomResult = $conn->query($randomQuery);

$randomBooks = [];

while ($row = $randomResult->fetch_assoc()) {
    $randomBooks[] = $row;
}

header('Content-Type: application/json');
echo json_encode($randomBooks);

$conn->close();
?>
