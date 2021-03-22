<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercicio 01</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        echo "O valor digitado foi $valor.";
        $raiz = sqrt($valor);
        echo "</br>A raiz quadrada de $valor é " .number_format($raiz, 2);
    ?>
    <br><br>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>