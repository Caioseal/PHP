<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
    $contador = 20;
    do {
        echo "$contador ";
        $contador -= 2;  
    } while ($contador >= 0);
    ?>
</div>
</body>
</html>