<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Variáveis Referenciadas</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "A variável 'A' vale $a.";
            echo "<br>A variável 'B' vale $b.";
        ?>
    </div>
</body>
</html>