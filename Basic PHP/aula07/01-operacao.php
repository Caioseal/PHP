<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Operações</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2. <br>";
            $resultado = ($tipo == "s") ? $n1 + $n2 : $n1 - $n2;
            echo "O resultado é $resultado.";
        ?>
    </div>
</body>
</html>