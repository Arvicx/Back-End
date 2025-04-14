<?php 
    $id = mysqli_real_escape_string($conexao,$_POST['idCarros']);
    $modelo = mysqli_real_escape_string($conexao, $_POST['modelo']);
    $marca = mysqli_real_escape_string($conexao, $_POST['marca']);
    $valor = mysqli_real_escape_string($conexao, $_POST['valor']);
    $ano = mysqli_real_escape_string($conexao, $_POST['ano']);
    $cor = mysqli_real_escape_string($conexao, $_POST['cor']);

    // UPDATE

    $sql = "UPDATE carros SET
        modeloCarro = '{$modelo}',
        marcaCarro = '{$marca}',
        valorCarro = '{$valor}',
        anoCarro = '{$ano}',
        corCarro = '{$cor}'
        WHERE idCarros = {$id}
    ";

    mysqli_query($conexao,$sql) or die("Erro ao Atualizar");

    echo "O carro foi atualizado";
        
?>