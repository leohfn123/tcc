<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quadrinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
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
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <!-- ... Seu código de navegação ... -->
</nav>

<div class="container">
    <h1 style="color: red;"> Quadrinhos\Mangas </h1>
    <div class="row">
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nome_livro']; ?></h5>
                        <img src="<?php echo 'img/' . $row['img_livro']; ?>" height="250px">
                        <p class="card-text"><?php echo $row['descricao_livro']; ?></p>
                        <p class="card-text">Tema: <?php echo $row['autor']; ?></p>
                        <p class="card-text">Texto: <?php echo $row['tipo_do_livro']; ?></p>
                        <a href="detalhes_livro.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Clique aqui para saber mais</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
