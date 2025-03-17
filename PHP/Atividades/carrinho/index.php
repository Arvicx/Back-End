<?php

    //inicia a sessao
    session_start();

    // verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }

    // adiciona o produto
    if(isset($_GET['produto'])){
        // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO 
        //
        $_SESSION['carrinho'][] = $_GET['produto'];
    }
    // $_SESSION['carrinho'] += $_GET['produto'];
    // var_dump($_SESSION['carrinho']);
    if(isset($_GET['deletarCarrinho'])){
        // session_destroy();
        $_SESSION['carrinho'] = [];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>Pichincha</h1>
        
    </header>
    <main>
        <div class="catalogo">
            <div id="catalogoNome">
                <h2>Catálogo</h2>
            </div>
            <div id="catalogoItens">
                <div class="card" style="width: 18rem;">
                    <img src="#" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SSD</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Adicionar ao Carrinho</a>
                        <a href="#" class="card-link">Comprar Agora</a>
                    </div>
                </div>
            </div>

        </div>
        <a href="?produto=SSD">Adicionar SSD</a>
        <a href="?produto=Disco de Memória">Adicionar Disco de Memória</a>
        <a href="?produto=Memória RAM">Adicionar Memória RAM</a>
        <a href="?produto=Placa Mãe">Adicionar Placa Mãe</a>
        <a href="?deletarCarrinho=True">Deletar Carrinho</a>

        <ol>
            <?php 
                // foreach(array as alias){}
                // foreach(filmes as filmes){filme.nome , filme.desc}
                foreach($_SESSION['carrinho'] as $produto){
                    echo "<li> $produto </li>";
                }
            ?>
        </ol>
    </main>

</body>
</html>