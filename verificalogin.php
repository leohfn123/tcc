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

        $sql = "SELECT * FROM cadastropessoa WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if ($user['ADM'] == '1') {
                // É um administrador, conceda acesso total
                $_SESSION['ADM'] = true;
                $_SESSION['email'] = $email;
            } else {
                // É um usuário normal, conceda acesso limitado
                $_SESSION['ADM'] = false;
                $_SESSION['email'] = $email;
            }
            
            header("Location: livrosgeral_biblioteca.php");
        } else {
            echo "Acesso negado. Tente novamente.";
        }

        $conn->close();
    }
    ?>

    <?php
    if (isset($_SESSION['ADM']) && $_SESSION['ADM']) {
        // Mostrar botões de edição para administradores
    ?>
        <button>Editar Livro</button>
        <button>Adicionar Livro</button>
    <?php
    } else {
        // Não mostrar botões de edição para usuários não administradores
    ?>
        <p>Você não tem permissão para editar livros.</p>
    <?php
    }
    ?>

</body>
</html>
