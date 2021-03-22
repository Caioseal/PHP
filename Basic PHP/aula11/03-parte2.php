<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $inicio = isset($_GET["ini"]) ? $_GET["ini"] : 1;
        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 1;
        $passo = isset($_GET["passo"]) ? $_GET["passo"] : 1;

        while ($inicio <= $fim) {
            echo "$inicio ";
            $inicio += $passo;
        }
    ?>
    <br><a href="03-parte1.html" class="botao">Voltar</a>
</div>
</body>
</html>