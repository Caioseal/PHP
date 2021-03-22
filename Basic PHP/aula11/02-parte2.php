<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $indice = 1;
        while ($indice <=5) {
            $v = "num" .$indice;
            $url = "v" .$indice;
            $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
            $indice++;
        }
        echo "$num1 $num2 $num3 $num4 $num5"
    ?>
</div>
</body>
</html>