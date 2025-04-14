<h1>DELETAR CARRO</h1>

<?php 
    $id = $_GET['idCarros'];

    $sql = "DELETE FROM carros WHERE idCarros = $id";

    $query = mysqli_query($conexao,$sql) or die("Erro ao deletar".mysqli_error($conexao));

    echo "O carro foi deletado com sucesso.";
?>