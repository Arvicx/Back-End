<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <main>
        <form action="assets/scripts/login.php" method="post">
            <!-- email -->
             <div class="form-group">
                <label for="email">Email: </label>
                <input placeholder="Digite seu email..." type="email" required name="email" id="email">
             </div>

             <!-- senha -->
             <div class="form-group">
                <label for="senha">Senha: </label>
                <input placeholder="Digite sua senha..." type="password" required name="senha" id="senha">
             </div>
             <button type="submit">LOGIN</button>
             <p><a href="#">Esqueci minha senha</a></p>
             <p><a href="assets/pages/cadastrar.php">Cadastre-se</a></p>

        </form>

    </main>
    <a href="assets/pages/home.php">Home</a>
</body>
</html>