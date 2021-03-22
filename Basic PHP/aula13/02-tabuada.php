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
        $numero = isset($_GET["num"]) ? $_GET["num"] : 1;
        for ($contador = 1; $contador <= 10; $contador++) {
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado <br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)"class="botao">Voltar</a>
</div>
</body>
</html>