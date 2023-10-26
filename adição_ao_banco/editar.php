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
        $nome_livro = $_POST['nome_livro'];
        $autor = $_POST['autor'];
        $descricao_livro['descricao_livro'];
        

        $sql = "UPDATE livros SET nome_livro='$nome_livro', autor='$autor' descricao_livro='$descricao_livro' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Livro atualizado com sucesso. <a href='index.php'>Voltar para a lista</a>";
        } else {
            echo "Erro na atualização do livro: " . $conn->error;
        }
    }

    $sql = "SELECT * FROM livros WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
       
        <h1>Editar Livro</h1>
        <form method="post">
            Nome do Livro: <input type="text" name="nome_livro" value="<?php echo $row['nome_livro']; ?>"><br>
            Autor: <input type="text" name="autor" value="<?php echo $row['autor']; ?>"><br>
            Descrição:<input type="text" name="autor" value="<?php echo $row['descricao_livro']; ?>"><br>
            <p class="card-text">Tema do livro:
            <label><select name="tema_do_livro" >
                   <option value = ""> escolha o tema do livro </option> 
                  <option value="Suspence">Suspense</option>
                   <option value="Romance">Romance</option>
                 <option value="Ficção">Ficção</option>
                  <option value="Aventura">Aventura</option>
                  <option value="Terror">Terror</option>
                    <option value="Material Acadêmico">Material Acadêmico</option>
                 <option value="Quadrinhos\Manga">Quadrinhos\Manga</option>
                 <option value="livros sobre programação">Livros sobre programação</option>
                 <?php echo $row['tipo_do_livro']; ?></p>
                 <br>         
             <img <?php echo  "src='img/". $row['img_livro']."'"; ?> height="250px" ><br></br>
            <brgk>
             <label>imagem:  <input type="file" name="imagem"></label><br>

            <input type="submit" value="Salvar">
        </form>
        <?php
    } else {
        echo "Livro não encontrado.";
    }

    $conn->close();
} else {
    echo "ID do livro não fornecido.";
}
?>
