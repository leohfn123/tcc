
<?php
session_start();
if(isset( $_SESSION['logado'] )){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de administrador</title>
</head>
<body><center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
<h1>Biblioteca com auxiliar de QR code </h1>

     
</br>
<div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
          <div class="card-body">

<h5>Bem-vindo administrador o que você gostaria de fazer?</h5>

<a href="adiciona_livros.php" class="btn btn-success">Adicionar livro</a>
</br>
<br>
<a href="edicao_editar.php" class="btn btn-warning">Editar livro</a>
</br>
<br>
<a href="edicao_excluir.php" class="btn btn-danger">Excluir livro</a>
</br>
<br>
      <a href="livrosgeral_biblioteca.php"  class="btn btn-primary">Ir a biblioteca</a><br>
</br>
      

</center>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php

}else{
    echo "logue para continuar"   ; 
}

?>