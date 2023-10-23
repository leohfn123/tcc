<?php
// Receba o e-mail a ser verificado
$email = $_POST['email'];

// Conectar ao banco de dados

      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'tcc-biblioteca';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para verificar se o e-mail já foi usado
$sql = "SELECT * FROM cadastropessoa WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$num_rows = $stmt->num_rows;
$stmt->close();

// Resposta JSON
$response = array();

if ($num_rows > 0) {
    // E-mail já foi usado
    $response['status'] = 'exist';
} else {
    // E-mail não foi usado
    $response['status'] = 'available';
}

// Encerrar a conexão com o banco de dados
$conn->close();

// Enviar resposta em formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
