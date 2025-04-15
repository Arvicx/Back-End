<?php 
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $receitaTexto = mysqli_real_escape_string($conexao, $_POST['receitaTexto']);
    $autor = mysqli_real_escape_string($conexao, $_POST['autor']);
    $tipoReceita = mysqli_real_escape_string($conexao, $_POST['tipoReceita']);
    $imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);

    $sql = "UPDATE receitas SET
        titulo = '{$titulo}',
        descricao = '{$descricao}',
        receitaTexto = '{$receitaTexto}',
        autor = '{$autor}',
        tipoReceita = '{$tipoReceita}',
        imagem = '{$imagem}'
        WHERE id = {$id}
    ";

    mysqli_query($conexao,$sql) or die("Erro ao atualizar".mysqli_error($conexao));

    echo "A receita de {$titulo} foi atualizada.";
?>