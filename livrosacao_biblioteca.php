
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Quadrinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">
  </head>
  <body>
    <?php
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'tcc-biblioteca';
      
    
      $conn = new mysqli($servername, $username, $password, $dbname);
      
   
      if ($conn ->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM livros WHERE tipo_do_livro = 'acao'";
      $result = $conn->query($sql);
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="a.php"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="livrosgeral_biblioteca.php">Home</a>
               
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                cadastre-se ou gaça o Login
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="cadastropessoa.php">Cadastro</a></li>
                 
                  </ul>
    </li>
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="encerrar_sessao.php">Sair</a>
              </li>
              <li class="nav-item">

              <li class="nav-item">
               
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tema de livros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="livrossuspence_biblioteca.php">Suspense</a></li>
                  <li><a class="dropdown-item" href="livrosromance_biblioteca.php">Romance</a></li>
                  <li><a class="dropdown-item" href="livrosficção_biblioteca.php">Ficção</a></li>                 
                  <li><a class="dropdown-item" href="livrosaventura_biblioteca.php">Aventura</a></li>
                  <li><a class="dropdown-item" href="livroquadrinhos_biblioteca.php">Quadrinhos</a></li>
                  <li><a class="dropdown-item" href="livrosterror_biblioteca.php">Terror</a></li>
                  <li><a class="dropdown-item" href="livrosacademico_biblioteca.php">Material Acadêmico</a></li>
                  <li><a class="dropdown-item" href="livrosacao_biblioteca.php">Ação</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="livrosgeral_biblioteca.php">Ver todos os livros</a></li>
                 
                </ul>
              </li>
            </ul>
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   
        
      </div>
      
      <div class="container">
        
      <h1 > Ação </h1>
      <div class="row">
        <?php
         while ($row = $result->fetch_assoc()) {
        ?>
      <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
          <div class="card-body">
          <h5 class="card-title" ><?php echo $row['nome_livro']; ?></h5><br>
          <center>
             <img <?php echo  "src='img/capa/". $row['img_livro']."'"; ?> height="250px"  ><br></br>
              </center>
             <h6 class="card-text">Autor: <?php echo $row['autor']; ?></h6>

            <a href="detalhes_livro.php?id=<?php echo $row['id']?>" class="btn btn-primary">Clique aqui para saber mais</a>
        <br>
        <?php 
              
              if (isset($_SESSION['ADM']) && $_SESSION['ADM']) {

       ?>
           <a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Editar</a>
           <a href="excluir.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Excluir</a>
       <?php
       } else {
           
           echo "";
       }
       ?>        
             


             </div>
            </div>
          </div>
          <?php
        }
        ?>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
