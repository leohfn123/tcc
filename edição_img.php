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

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Verifique se um arquivo de imagem foi enviado
        if(isset($_FILES['nova_imagem']) && $_FILES['nova_imagem']['error'] === UPLOAD_ERR_OK) {
            $nome_imagem = $_FILES['nova_imagem']['name'];
            $caminho_imagem = $_SERVER['DOCUMENT_ROOT'] . '/tcc/caminho/para/salvar/a/imagem/' . $nome_imagem;

            // Faça o upload da nova imagem para o servidor
            if(move_uploaded_file($_FILES['nova_imagem']['tmp_name'], $caminho_imagem)) {
                // Atualize o nome da imagem no banco de dados
                $sql = "UPDATE livros SET img_livro='$nome_imagem' WHERE id=$id";

                if ($conn->query($sql) === TRUE) {
                    echo "<h4>Imagem atualizada com sucesso.</h4>";
                } else {
                    echo "Erro na atualização da imagem: " . $conn->error;
                }
            } else {
                echo "Erro ao fazer o upload da imagem.";
            }
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
            <!-- ... Seu código de cabeçalho ... -->
        </head>
        <body>
            <center>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h1>Editar Imagem do Livro</h1>
                            <form method="post" enctype="multipart/form-data">
                                Livro Atual: <img src="/tcc/caminho/para/salvar/a/imagem/<?php echo $row['img_livro']; ?>"><br>
                                Nova Imagem: <input type="file" name="nova_imagem"><br>
                                <input type="submit" class="btn btn-success" value="Salvar">
                                <a href="edicao_editar.php" class="btn btn-danger">Voltar</a>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </center>
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
