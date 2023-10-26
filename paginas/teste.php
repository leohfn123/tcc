<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barra de Pesquisa do Google</title>
    <style>
        .search-container {
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<body>
<div class="search-container">
    <form method="post" action="resultado_pesquisa.php">
        <input type="text" name="query" placeholder="Pesquisar no Google">
        <input type="submit" value="Pesquisar">
    </form>
</div>
</body>
</html>
