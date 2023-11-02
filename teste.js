document.addEventListener("DOMContentLoaded", function () {
    let loadMoreButton = document.getElementById("ver-mais");

    loadMoreButton.addEventListener("click", function () {
        // Fazer uma solicitação AJAX para buscar livros aleatórios adicionais do servidor
        fetch("get_random_books.php")
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    // Encontrou livros aleatórios adicionais, adicione-os ao DOM
                    const container = document.querySelector(".container");
                    const newRow = document.createElement("div");
                    newRow.className = "row";

                    data.forEach(book => {
                        const col = document.createElement("div");
                        col.className = "col-sm-4 mb-3 mb-sm-0";

                        const card = document.createElement("div");
                        card.className = "card";

                        // Conteúdo do livro, similar ao seu código existente
                        // Certifique-se de adicionar o título, imagem, autor e outros detalhes do livro.

                        col.appendChild(card);
                        newRow.appendChild(col);
                    });

                    container.appendChild(newRow);
                } else {
                    loadMoreButton.disabled = true;
                    loadMoreButton.innerHTML = "Não há mais livros";
                }
            })
            .catch(error => {
                console.error("Erro ao buscar livros adicionais: " + error);
            });
    });
});
