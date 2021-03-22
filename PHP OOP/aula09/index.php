<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Livro</title>
</head>
<body>
<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa('Caio', 28, 'M');
    $p[1] = new Pessoa('Tati', 27, 'F');
    $l[0] = new Livro('PHP Básico', 'Gustavo Guanabara', 500, $p[0]);
    $l[1] = new Livro('Harry Potter', 'J.K. Rowling', 400, $p[1]);

    $l[1]->detalhes();
    
    ?>
</pre>
</body>
</html>