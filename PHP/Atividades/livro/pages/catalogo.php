<main>
    <div id="cards">
        <?php 
            $sql = "SELECT * FROM livros";
            $query = mysqli_query($conexao, $sql) or die("Erro na requisitação".mysqli_error($conexao));
            while($dados = mysqli_fetch_assoc($query)){
                ?> 
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $dados['imagem'] ?>" class="card-img-top" alt="Imagem">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dados['nome']?></h5>
                            <p class="card-text"><?= $dados['descricao']?></p>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>

    <div id="adicionar">
        <h3>Adicionar ao Catálogo</h3>
        <a href="index.php?menu=adicionar"><h3>Adicionar</h3></a>
    </div>
</main>