<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printf</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
    $produto = "leite";
    $preco = 4.5;
    echo "O $produto custa R$ " . number_format($preco, 2);
    printf ("<br>O %s custa R$ %.2f", $produto, $preco);
    ?>
</div>
</body>
</html>