<?php 
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $receitaTexto = mysqli_real_escape_string($conexao, $_POST['receitaTexto']);
    $autor = mysqli_real_escape_string($conexao, $_POST['autor']);
    $tipoReceita = mysqli_real_escape_string($conexao, $_POST['tipoReceita']);
    $imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);

    $sql = "INSERT INTO receitas(
    titulo,
    descricao,
    receitaTexto,
    autor,
    tipoReceita,
    imagem)VALUES(
    '{$titulo}',
    '{$descricao}',
    '{$receitaTexto}',
    '{$autor}',
    '{$tipoReceita}',
    '{$imagem}'
    )";

    mysqli_query($conexao,$sql) or die("Erro ao Adicionar Receita".mysqli_error(($conexao)));
    echo "A Receita de {$titulo} foi adicionada com sucesso!";
?>