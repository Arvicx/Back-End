<?php

    //inicia a sessao
    session_start();
    
    class Produto{
        public $id;
        public $nome;
        public $valor;
        public $desc;

        public function __construct($id,$nome,$valor,$desc){
            $this->id = $id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->desc = $desc;

        }

    }

    $nome;

    // public - qualquer parte do código mexe no atributo
    // private - apenas o que está dentro do class mexe no atributo

    // verifica se carrinho está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];
    }

    // adiciona o produto
    if(isset($_GET['produto'])){
        $produtosDados = new Produto($_GET['id'],$_GET['produto'],$_GET['valor'],$_GET['desc']);
        $_SESSION['carrinho'][] = $produtosDados;
    }

    // $_SESSION['carrinho'] += $_GET['produto'];
    
    // var_dump($_SESSION['carrinho']);
    
    if(isset($_GET['deletarCarrinho'])){
        // session_destroy();
        $_SESSION['carrinho'] = [];
    }

    if(isset($_GET['removerItem'])){
        foreach($_SESSION['carrinho'] as $id => $produto){
            if($produto->id == $_GET['removerItem']){
                unset($_SESSION['carrinho'][$id]);
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
            }
        }
        
    }

?>

<?php 
    $valorTotal = 0;

    foreach($_SESSION['carrinho'] as $produto){
        $valorTotal += $produto->valor;
    }

    if($valorTotal == 0){
        echo "O Carrinho está vazio";
    }else{
        echo "O valor total é R$ $valorTotal";
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
            <div class="catalogoNome">
                <h2>Catálogo</h2>
            </div>
            <div class="catalogoItens">
                <div class="card" style="width: 18rem;">
                    <img src="images/SSD.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SSD</h5>
                        <p class="card-text">SSD Kingston 2TBs</p>
                    </div>
                    <div class="card-body">
                        <a href="?id=1&produto=SSD&valor=199.99&desc='1TB de Armazenamento'">Adicionar ao Carrinho</a>
                        <a href="#" class="card-link">Comprar Agora</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="images/Disco de Memória.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Disco de Memória</h5>
                        <p class="card-text">Disco de Memória Mais Zika do Universo da Face da Terra</p>
                    </div>
                    <div class="card-body">
                        <a href="?id=2&produto=Disco de Memória&valor=50.00&desc='Um disco de Memória'">Adicionar ao Carrinho</a>
                        <a href="#" class="card-link">Comprar Agora</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="images/Memória RAM.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Memória RAM</h5>
                        <p class="card-text">Memória RAM 64GB Pichincha DDR4</p>
                    </div>
                    <div class="card-body">
                    <a href="?id=3&produto=Memória RAM&valor=100.00&desc='Memória RAM de 16GB'">Adicionar ao Carrinho</a>
                    <a href="#" class="card-link">Comprar Agora</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="images/Placa Mãe.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Placa Mãe</h5>
                        <p class="card-text">Placa Mãe do ano</p>
                    </div>
                    <div class="card-body">
                    <a href="?id=4&produto=Placa Mãe&valor=300.00&desc='Placa Mãe de Todos e Avó de Alguns'">Adicionar ao Carrinho</a>
                    <a href="#" class="card-link">Comprar Agora</a>
                    </div>
                </div>
            </div>

        </div>
        
        <button><a href="?deletarCarrinho=True">Deletar Carrinho</a></button>

        <ol>
            <?php 
                // foreach(array as alias){}
                // foreach(filmes as filmes){filme.nome , filme.desc}
                foreach($_SESSION['carrinho'] as $produto){
                    echo "<li> 
                        <h1>$produto->nome</h1>
                        <p>$produto->valor</p>
                        <p>$produto->desc</p>
                        <a href='?removerItem=$produto->id'>x</a>
                    </li>";
                }
            ?>
        </ol>
    </main>

</body>
</html>