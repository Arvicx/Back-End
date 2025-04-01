<?php 
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $avaliacao = mysqli_real_escape_string($conexao, $_POST['avaliacao']);

    $sql = "INSERT INTO livros(
        nome,
        imagem,
        descricao,
        avaliacao
    )VALUES(
        '{$nome}',
        '{$imagem}',
        '{$descricao}',
        '{$avaliacao}'
    )";

    mysqli_query($conexao,$sql) or die("Erro ao Adicionar Livro".mysqli_error(($conexao)));

    echo "O livro {$nome} foi adicionado com sucesso";
?>