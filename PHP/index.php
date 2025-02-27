<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introdução</title>
</head>
<body>
    <h1>Hello World!</h1>

    <!-- <script language="php"></script> -->
    <?php 
        echo "Arthur Fernandes <br>";
        EcHo "Diane <br>";
        ECHO "Teste <br>";
        $palavra = "Bolo";
        echo $palavra;
        $PALAVRA = "Banana";
        echo $PALAVRA;

        echo date("d/M/y");
        echo "Todos os direitos reservados. @".date("Y");
        echo "<br>";
        date_default_timezone_set("America/São_Paulo");
        echo date_default_timezone_get();
        echo ("G:i:s T");
        // phpinfo();
    ?>
</body>
</html>