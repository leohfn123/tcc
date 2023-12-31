<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tcc-biblioteca';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_livro = $_POST['nome_livro'];
        $autor = $_POST['autor'];
        $descricao_livro = $_POST['descricao_livro'];

        if(isset($_FILES['nova_img_livro']) && $_FILES['nova_img_livro']['error'] === UPLOAD_ERR_OK) {
            $ext_img_livro = explode(".", $_FILES['nova_img_livro']['name']);
            $img_livro = $id . "." . $ext_img_livro[1];
            move_uploaded_file($_FILES['nova_img_livro']['tmp_name'], './img/capa/' . $img_livro);
        }

        
        $sql = "UPDATE livros SET nome_livro=?, autor=?, descricao_livro=?, img_livro=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $nome_livro, $autor, $descricao_livro, $img_livro, $id);

        if ($stmt->execute()) {
            echo "<h4>Livro atualizado com sucesso.</h4>";
        } else {
            echo "Erro na atualização do livro: " . $stmt->error;
        }
    }

    $sql = "SELECT * FROM livros WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar livros</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body>
            <center>
        <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
          <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            
            Nome do Livro: <input type="text" name="nome_livro" value="<?php echo $row['nome_livro']; ?>"><br>
            Autor: <input type="text" name="autor" value="<?php echo $row['autor']; ?>"><br>
            Descrição: <input type="text" name="descricao_livro" value="<?php echo $row['descricao_livro']; ?>"><br>
            
            <label>Imagem Atual:</label><br>
            <img <?php echo  "src='img/capa/". $row['img_livro']."'"; ?> height="250px" ><br></br>
            <br>
            <label>Nova Imagem: <input type="file" name="nova_img_livro"></label><br>
           
            <input type="submit" class="btn btn-success" value="Salvar">
            <a href="livrosgeral_biblioteca.php" class="btn btn-danger">voltar</a>,
    </div>
    </div>
    </div>
    </center>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </body>
        </html>
        <?php
    } else {
        echo "Livro não encontrado.";
    }

    $conn->close();
} else {
    echo "ID do livro não fornecido.";
}
