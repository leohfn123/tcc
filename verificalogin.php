<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    
    <?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       
        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
       
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'tcc-biblioteca';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM cadastropessoa WHERE email = '$email' AND senha = '$senha' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['logado'] = 1;
         
            header("Location: livrosgeral_biblioteca.php");
           
        } else {
            echo "acesso negado tente novamente";
        }

        
        $conn->close();
    }
    ?>
   



</body>
</html>
