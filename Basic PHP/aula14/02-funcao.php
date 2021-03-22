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
        function soma ($a, $b) {
            $soma = $a + $b;
            return $soma;
        }

        $x = 3;
        $y = 4;
        $resultado = soma($x, $y);
        echo "A soma entre $x e $y é igual a $resultado";
    ?>
    
</div>
</body>
</html>