<h1>DELETAR RECEITA</h1>

<?php 
    $id = $_GET['id'];

    $sql = "DELETE FROM receitas WHERE id = $id";

    $query = mysqli_query($conexao,$sql) or die("Erro ao deletar".mysqli_error($conexao));

    echo "A receita foi deletado com sucesso.";
?>