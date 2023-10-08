<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tela_principal_biblioteca.php">Home</a>
              </li>
              <li class="nav-item">
               
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  livros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="livrossuspence_biblioteca.php">Suspence</a></li>
                  <li><a class="dropdown-item" href="livrosromance_biblioteca.php">Romance</a></li>                        
                  <li><a class="dropdown-item" href="livrosaventura_biblioteca.php">Aventura</a></li>
                  <li><a class="dropdown-item" href="livroquadrinhos_biblioteca.php">Quadrinhos\Mangas</a></li>
                  <li><a class="dropdown-item" href="livrosterror_biblioteca.php">Terror</a></li>
                  <li><a class="dropdown-item" href="livrosacademico_biblioteca.php">Material Acadêmico</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="livrosgeral_biblioteca.php">Ver todos os livros</a></li>
                  <li><a class="dropdown-item" href="livrosprogramação_biblioteca.php">livros sobre programação  </a></li>
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
    <div class="container">
       
      </div>
    
      <h1>Terror</h1>
      <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">five nights at Regin's</h5>
            <img src="img/img25.jpeg" height="250px" >
            <p class="card-text">um menino quer se tornar hokage</p>
            <a href="teste.html" class="btn btn-primary">clique aqui para saber mais </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">comedora de mentes</h5>
            <img src="img/img30.jpeg" height="250px">
            <p class="card-text"> FDS um pirata que estica </p>
            <a href="testepessoal.html" class="btn btn-primary">clique aqui para saber mais </a>
          </div>
        </div>
      </div>
    </div>
    </div>
     <br>
    <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <img src="img/img31.jpeg" height="250px" >
          <p class="card-text">o homen torto</p>
          <a href="testepessoal3.html" class="btn btn-primary">clique aqui para saber mais </a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">o sugador de almas </h5>
          <img src="img/img22 (1).jpeg" height="250px" >
          <p class="card-text">ele teve os pais assasinados , depois ele se torna um vigilante para parar o crime de gohtam</p>
          <a href="testepessoal2.html" class="btn btn-primary">clique aqui para saber mais </a>
        </div>
      </div>
    </div>
  </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>