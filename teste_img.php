<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

// Crie uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn ->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {  
       
        echo "título: " . $row['nome_livro'] . "<br>";
        echo "autor: " . $row['autor'] . "<br>";
       echo "descricao: " . $row['descricao_livro'] ."<br>";
       echo "imagem " . $row['img_livro'] ."<br>";
       echo "tema livro". $row['tipo_do_livro'] ."<br>";
        echo "<hr>";
        echo '<img src="img/'.$row['img_livro'].'">';
    }
} else {
    echo "Nenhum resultado encontrado.";
}



?>




