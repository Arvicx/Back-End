<main>
    <div class="catalogoReal">
        <h1>Catálogo</h1>
        <div id="cataloguinho">
            <div id="item">
                <?php 
                    $sql = "SELECT * FROM catalogo";
                    $query = mysqli_query($conexao, $sql) or die("Erro na requisitação".mysqli_error($conexao));
                    while ($dados = mysqli_fetch_assoc($query)){
                        ?>
                                <h1><?= $dados['nome'] ?></h1>
                                <h2>Valor: R$<?= $dados['valor'] ?></h2>
                                <img src="<?= $dados['imagem'] ?>" alt="">
                                <br>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>