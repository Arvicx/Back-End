<?php 
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <a href="index.php?menu=home"><h2>Home</h2></a>
        <h1>Livros</h1>
        <a href="index.php?menu=catalogo"><h2>Catálogo</h2></a>
    </header>

    <main>
        <?php 
            if(isset($_GET['menu'])){
                $pagina = $_GET['menu'];
            }else{
                $pagina = "home";
            }

            switch($pagina){
                case 'home' :
                    include("pages/home.php");
                    break;
                case 'catalogo' :
                    include("pages/catalogo.php");
                    break;
                case 'adicionar' :
                    include("pages/adicionarCatalogo.php");
                    break;
                case 'dbAdicionarCatalogo' :
                    include("pages/dbAdicionarCatalogo.php");
                    break;
                default : 
                    include("pages/home.php");
                    break;
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>