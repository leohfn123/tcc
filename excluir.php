
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

    $sql = "DELETE FROM livros WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h4>Livro excluído com sucesso.</h4>";
    } else {
        echo "Erro na exclusão do livro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do livro não fornecido.";
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Tela inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php
       
      session_start();

      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'tcc-biblioteca';
      
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      if ($conn ->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM livros";
      $result = $conn->query($sql);
     
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <a href="tela_adm.php" class="btn btn-primary"> Voltar a tela principal</a>

            </ul>
            <div class="search-container">
            <form class="form-control me-2" method="post" action="resultado_pesquisa.php">
           <input type="text" name="query" placeholder="Pesquisar livros" aria-label="Pesquisar" required>
           <button class="btn btn-outline-success" type="submit" value="Pesquisar">Pesquisar</button>
             </form>
            </div>
          </div>
        </div>
      </nav>
   
        
      </div>
      
      <div class="container">
        
    
      <div class="row">
        <?php
         while ($row = $result->fetch_assoc()) {
        ?>
      <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
          <div class="card-body">
          <h5 class="card-title"><?php echo $row['nome_livro']; ?></h5>
             <img <?php echo  "src='img/". $row['img_livro']."'"; ?> height="250px" ><br></br>
             <h6 class="card-text">Autor: <?php echo $row['autor']; ?></h6>
            <a href="detalhes_livro.php?id=<?php echo $row['id']?>" class="btn btn-primary">Clique aqui para saber mais</a>
        <br>
        
        <a href="excluir.php?id=<?php echo $row['id']?>" class="btn ">excluir</a>
                
             </div>
            </div>
            <br>
          </div>
          
          <?php
        }
        ?>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


