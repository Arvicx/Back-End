<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <h1>Cadastro</h1>

        <!-- NOME USUÁRIO -->
        <form action="pages/menu.php" method="get">
            <div class="form-input">
                <label for="">Nome</label>
                <input placeholder="Insira seu nome completo" name="nome" id="nome" type="text">
            </div>

            <!-- EMAIL USUÁRIO -->
            <div class="form-input">
                <label for="email">Email</label>
                <input placeholder="Insira seu email completo" name="email" id="email" type="email">
            </div>

            <div class="form-input">
                <label for="senha">Senha</label>
                <input placeholder="Insira sua senha" name="senha" id="senha" type="password">
            </div>

            <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>