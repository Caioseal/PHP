<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';

    $c = new Cachorro;

    $c->emitirSom();
    $c->reagirFrase("Olá");
    $c->reagirIdadePeso(7, 8)

    ?>
</body>
</html>