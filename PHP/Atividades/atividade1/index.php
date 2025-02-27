<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Élfica</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <?php    
            echo "<h1>Biblioteca Élfica</h1><br>";
        ?>
    </header>

    <main>
        <?php 
            $autor = "J.R.R. Tolkien";
            $titulo = "O Hobbit";
            $descricao = "Bilbo Bolseiro era um dos mais respeitáveis hobbits de todo o Condado até que, um dia, o mago Gandalf bate à sua porta. A partir de então, toda sua vida pacata e campestre soprando anéis de fumaça com seu belo cachimbo começa a mudar. Ele é convocado a participar de uma aventura por ninguém menos do que Thorin Escudo-de-Carvalho, um príncipe do poderoso povo dos Anãos. Esta jornada fará Bilbo, Gandalf e 13 anãos atravessarem a Terra-média, passando por inúmeros perigos, sejam eles, os imensos trols, as Montanhas Nevoentas infestadas de gobelins ou a muito antiga e misteriosa Trevamata, até chegarem (se conseguirem) na Montanha Solitária. Lá está um incalculável tesouro, mas há um porém. Deitado em cima dele está Smaug, o Dourado, um dragão malicioso que... bem, você terá que ler e descobrir. Lançado em 1937, O Hobbit é um divisor de águas na literatura fantástica mundial. Mais de 80 anos após a sua publicação, o livro que antecede os ocorridos em O Senhor dos Anéis continua arrebatando fãs de todas as idades, talvez pelo seu tom brincalhão com uma pitada de magia élfica, ou talvez porque J.R.R. Tolkien tenha escrito o melhor livro infanto-juvenil de todos os tempos.";
            echo "<h2>Catálogo</h2><br>";
            echo "<h3>$titulo</h3><br>";
            echo "<p>$descricao</p><br>";
            echo "<p>Autor: $autor</p>";
        ?>
    </main>
</body>
</html>