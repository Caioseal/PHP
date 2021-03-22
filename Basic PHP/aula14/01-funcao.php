<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        function soma ($a,$b) {
            $soma = $a + $b;
            echo "<p>A soma vale $soma</p>";
        }
        
        soma (3, 4);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma ($x, $y);
    ?>
</div>
</body>
</html>