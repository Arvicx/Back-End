<?php 
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzarthur</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <div id="headerEsquerda">
            <h1>Pizzarthur</h1>
        </div>
        <div id="headerDireita">
            <a href="index.php?menu=home"><h3>Home</h3></a>
            <a href="index.php?menu=catalogo"><h3>Catálogo</h3></a>
        </div>
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
                    include("pages/home/home.php");
                    break;
                case 'catalogo' :
                    include("pages/catalogo/catalogo.php");
                    break;
                default :
                    include("pages/home/home.php");
                    break;
            }
        ?>
    </main>
</body>
</html>