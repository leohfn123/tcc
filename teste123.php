<!DOCTYPE html>
<html>
<head>
    <title>Barra de Pesquisa de Livros</title>
</head>
<body>
    <h1>Pesquisa de Livros</h1>
    <form method="post" action="">
        <input type="text" name="search" placeholder="Digite o título do livro">
        <input type="submit" name="submit" value="Pesquisar">
    </form>

    <?php
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'tcc-biblioteca';

    if (isset($_POST["submit"])) {
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
      }

        $searchTerm = $conn->real_escape_string($_POST["search"]);

        $sql = "SELECT * FROM livros WHERE nome_livro LIKE '%$searchTerm'";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Resultados da Pesquisa:</h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>Título: " . $row["nome_livro"] . ", Autor: " . $row["autor"] . "</li>";
                
                echo "<img src='" . $row['img_livro'] . "' alt='Capa do Livro'>";
            }
            echo "</ul>";
        } else {
            echo "Nenhum livro encontrado.";
        }
    
      
    }
    ?>
</body>
</html>
