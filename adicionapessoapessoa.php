<?php



$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tcc-biblioteca';

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$_SESSION['nome'] = "nome";



$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastropessoa WHERE email = '$email' ";
$result = $conexao->query($sql);

if ($result->num_rows >= 1) {
echo "erro ao cadastrar, esse e-mail ja está em uso";
}else{
    $sql = "INSERT INTO cadastropessoa (nome ,email ,senha )
        VALUES ('$nome','$email', '$senha' )";
        
if ($conexao->query($sql) === TRUE) {
  header("Location: livrosgeral_biblioteca.php");
} else {
    echo "Erro ao cadastrar " . $conexao->error;
}
}
$conexao->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro pessoa </title>
   
   
</head>

<body>
<form  action="adicionapessoapessoa.php" method="POST" enctype="multipart/form-data">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="teste.css">
<center>
<br>
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
        
          <h5 class="card-title">Cadastro pessoa</h5>
        
<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="nome" aria-label="nome" name  = "nome">
  </div>
</div>
<form class="row g-3" method="POST">  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" >Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo: usuario@gmail.com" name="email">

  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label"  >senha</label>
    <input type="password" class="form-control" id="inputPassword4" name="senha">
  </div>
    
    <input class="btn btn-outline-success" type="submit" value="Cadastrar">
    
          
     

     <a href="livrosgeral_biblioteca.php" class="btn btn-outline-danger">Sair para tela inicial</a>

        
        </div>
      </div>
      </div>
      </center>  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
   


        </form>
          </body>
         </html>
          
