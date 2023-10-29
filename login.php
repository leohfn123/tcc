
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
   
</head>

<body>
<form action="verificalogin.php" method="POST" enctype="multipart/form-data">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<center> 
<br>
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
            <center>
          <h5 class="card-title">Login</h5>
            </center>
          
          
<br>


<center>      
<div class="row g-3">
  
</div>
<form class="row g-3" method="POST">  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" >Coloque seu email</label><br>
    <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo: usuario@gmail.com" name="email">

  </div>
  <div class="col-md-6"method="POST">
    <label for="inputPassword4" class="form-label">Coloque sua senha</label>
    <input type="password" class="form-control" id="inputPassword4" name="senha">
  </div>
   <br> 
    <input class="btn btn-success" type="submit" value="Login">
    <a href="livrosgeral_biblioteca.php" class="btn btn-danger">Sair</a>
    </div>
      </div>
      </div> 
         </form>
</center> 
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
          </body>
         </html>