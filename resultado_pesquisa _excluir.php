<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado da Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="planodefundo.css">
</head>
<body>



<?php
if (isset($_POST['query'])) {
    $searchTerm = $_POST['query'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tcc-biblioteca';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

   
    $query = "SELECT * FROM livros WHERE nome_livro LIKE '%" . $searchTerm . "%' OR autor LIKE '%" . $searchTerm . "%' OR descricao_livro LIKE '%" . $searchTerm . "%' OR img_livro LIKE '%" . $searchTerm . "%'";
    $result = $conn->query($query);
?>
<center>
  <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
          <div class="card-body">
            <?php
   
    if ($result->num_rows > 0) {
        echo "<h1>Resultados da pesquisa para: $searchTerm</h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row['nome_livro'] . "</h2>";
            
            echo "<p><strong>Autor:</strong> " . $row['autor'] . "</p>";
            echo "<img src='img/capa/" . $row['img_livro'] . "' alt='Capa do Livro'>";
            echo "<p><strong>Descrição:</strong> " . $row['descricao_livro'] . "</p> <br>";
          
            
            echo "<hr>";
        }
    } else {
        echo "<h1>Nenhum resultado encontrado para: $searchTerm</h1>";
    }

    $conn->close();
} else {
    echo "<h1>Nenhum termo de pesquisa recebido.</h1>";
}
?>
          </div>
      </div>
  </div>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>
