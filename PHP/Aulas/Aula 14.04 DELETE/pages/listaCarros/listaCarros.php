<h1>Você está na página de listas de carros</h1>

<a href="index.php?menu=adicionarCarro">
    <button type="button">Adicionar Carro</button>
</a>

<form action="index.php?menu=lista" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">PESQUISAR</button>
</form>

<table class="table">
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
        <th></th>
        <th></th>
    </tr>



<?php
    if(isset($_POST['pesquisa'])){
        $termoPesquisado = $_POST['pesquisa'];
    }else{
        $termoPesquisado = "";
    }

    $sql = "SELECT idCarros,
        upper(modeloCarro) AS modeloCarro,
        upper(marcaCarro) AS marcaCarro,
        upper(valorCarro) AS valorCarro,
        DATE_FORMAT(anoCarro, '%d / %m / %y') AS anoCarro,
        upper(corCarro) AS corCarro
        FROM carros WHERE 
        idCarros = '$termoPesquisado' OR
        modeloCarro LIKE '%$termoPesquisado%'
        ORDER BY modeloCarro
        ";
    // pedido
    $query = mysqli_query($conexao, $sql) or die("Erro na requisição".mysqli_error($conexao));

    // fetch_asso = vai acessar uma query e contar os resultados
    while($dados = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td><?= $dados['modeloCarro'] ?></td>
                <td><?= $dados['marcaCarro'] ?></td>
                <td><?= $dados['valorCarro'] ?></td>
                <td><?= $dados['anoCarro'] ?></td>
                <td><?= $dados['corCarro'] ?></td>
                <td><a href="index.php?menu=editarCarro&idCarros=<?=$dados['idCarros']?>" class="btn btn-primary">EDITAR</a></td>
                <td><a href="index.php?menu=deletarCarro&idCarros=<?=$dados['idCarros']?>" class="btn btn-danger">DELETAR</a></td>
            </tr>
        <?php
    }
?>
</table>