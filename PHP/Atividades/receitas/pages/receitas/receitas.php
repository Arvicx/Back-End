
<a href="index.php?menu=adicionarReceita">
    <button class="btn btn-primary" type="button">Adicionar Receita</button>
</a>

<form action="index.php?menu=receitas" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">PESQUISAR</button>
</form>

<table class="table">
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th>Texto da Receita</th>
        <th>Autor</th>
        <th>Tipo da Receita</th>
    </tr>

    <?php 
        if(isset($_POST['pesquisa'])){
            $termoPesquisado = $_POST['pesquisa'];
        }else{
            $termoPesquisado = "";
        }

        $sql = "SELECT id,
        upper(titulo) AS titulo,
        upper(descricao) AS descricao,
        upper(receitaTexto) AS receitaTexto,
        upper(autor) AS autor,
        upper(tipoReceita) AS tipoReceita,
        imagem FROM receitas WHERE
        id = '$termoPesquisado' OR
        titulo OR tipoReceita LIKE '%$termoPesquisado%'
        ORDER BY titulo";

        $query = mysqli_query($conexao,$sql) or die("Erro na requisição".mysqli_error($conexao));

        while($dados = mysqli_fetch_assoc($query)){
            ?>
                <tr>
                    <td><?= $dados['titulo']?></td>
                    <td><?= $dados['descricao']?></td>
                    <td><?= $dados['receitaTexto']?></td>
                    <td><?= $dados['autor']?></td>
                    <td><?= $dados['tipoReceita']?></td>
                    <td><a href="index.php?menu=editarReceita&id=<?=$dados['id']?>" class="btn btn-primary">EDITAR</a></td>
                    <td><a href="index.php?menu=deletarReceita&id=<?=$dados['id']?>" class="btn btn-danger">DELETAR</a></td>
                </tr>
                <?php
        }
    ?>
</table>