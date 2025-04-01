<main>
    <h1>Adicionar um novo Livro</h1>

    <form action="index.php?menu=dbAdicionarCatalogo" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="text" id="imagem" name="imagem">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao">
        </div>
        <div class="form-group">
            <label for="avaliacao">Avaliação:</label>
            <input type="text" id="avaliacao" name="avaliacao">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</main>