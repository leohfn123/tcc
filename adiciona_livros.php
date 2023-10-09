

        <!DOCTYPE html>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cadastro livro biblioteca</title>
     
</head>
<body>
<form action="cadastro.php" method="POST" enctype="multipart/form-data">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<center> 

    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
            <center>
          <h5 class="card-title">Cadastro do livro</h5>
            </center>
          
          


            
<center >      
    <label>Título: <input type="text" name="titulo" required></label><br>
            <br>
         <label>Autor: <input type="text" name="autor" required></label><br>
             <br>
                <label>imagem:  <input type="file" name="imagem"></label><br>
                 <br>
                <label>tema do livro:<select name="tema_do_livro" >
                   <option value = ""> escolha o tema do livro </option> 
                  <option value="Suspence">Suspence</option>
                   <option value="Romance">Romance</option>
                 <option value="Ficção">Ficção</option>
                  <option value="Aventura">Aventura</option>
                  <option value="Terror">Terror</option>
                    <option value="Material Acadêmico">Material Acadêmico</option>
                 <option value="Quadrinhos\Manga">Quadrinhos\Manga</option>
                 <option value="livros sobre programação">livros sobre programação</option>
         
            </select>
        </label><br> 
            <br>
           <label>Descrição: <textarea name="descricao"></textarea> </label><br>

         <input  class="btn btn-primary" type="submit" value="Cadastrar" >
         </form>
          </body>
         </html>
          

            <a href="livroquadrinhos_biblioteca.php" class="btn btn-primary" >click para ir ao site</a>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </div>
      </div>
      </div> 
   
</center> 

