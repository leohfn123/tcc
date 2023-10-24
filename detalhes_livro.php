<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detalhes do Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Detalhes do Livro</h1>
    <?php
   
    if (isset($_GET['id'])) {
        $bookId = $_GET['id'];

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'tcc-biblioteca';

        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

       
        $sql = "SELECT * FROM livros WHERE id = $bookId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nome_livro']; ?></h5><br>
                    <img src="img/<?php echo $row['img_livro']; ?>" height="250px"><br></br>
                    <p class="card-text">Autor: <?php echo $row['autor']; ?></p>
                    <p class="card-text">Tema do livro: <?php echo $row['tipo_do_livro']; ?></p>
                    <p class="card-text">Descrição: <?php echo $row['descricao_livro']; ?></p>
                    <a href="livrosgeral_biblioteca.php" class="btn btn-primary float-end">Voltar ao inicio</a>
                    
                    <button class="btn btn-primary " onclick="goBack()">Voltar</button>

                 </div>
                <script>
                function goBack() {
             window.history.back();
            }
            </script>
            </div>
            <?php
        } else {
            echo "Livro não encontrado.";
        }

       
        $conn->close();
    } else {
        echo "";
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
