<!DOCTYPE html>
<html>
<head>
    <script>
        // Função para tornar o botão visível
        function tornarBotaoVisivel() {
            var botao = document.getElementById("meuBotao");
            botao.style.display = "block"; // ou "inline" para botão tipo inline
        }

        // Esta é apenas uma função de exemplo que chama a função acima quando um evento ocorre.
        function realizarAcao() {
            // Simule uma ação, por exemplo, clicando em algum elemento.
            // Quando a ação ocorre, o botão será tornado visível.
            tornarBotaoVisivel();
        }
    </script>
</head>
<body>
    <button id="meuBotao" style="display: none">Meu Botão</button>
    <button onclick="realizarAcao()">Realizar Ação</button>
</body>
</html>
