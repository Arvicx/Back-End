<h1>Adicionar Receita</h1>

<form action="index.php?menu=dbAdicionarReceita" method="post">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="receitaTexto">Texto da Receita:</label>
        <input type="text" id="receitaTexto" name="receitaTexto">
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="tipoReceita">Tipo da Receita:</label>
        <input type="text" id="tipoReceita" name="tipoReceita">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="text" id="imagem" name="imagem">
    </div>
    <button type="submit">Cadastrar</button>
</form>