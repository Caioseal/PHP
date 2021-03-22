<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $valor = isset($_GET["number"]) ? $_GET["number"] : 1;
        echo "<h1> Calculando o fatorial de $valor";
        $contador = $valor;
        $fatorial = 1;
        do {
            $fatorial = $fatorial * $contador;
            $contador --;
        } while ($contador >= 1);
        echo "<h2>$valor! = $fatorial";
    ?>
    <p><a href="02-exercicio.html" class="botao">Voltar</a></p>
</div>
</body>
</html>