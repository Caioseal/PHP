<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual região você mora?</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $estado = isset($_GET["estado"]) ? $_GET["estado"] : 1;
        echo "Você mora na ";
        switch ($estado) {
            case 1:
                echo "região norte";
                break;
            case 2:
                echo "região nordeste";
                break;
            case 3:
                echo "região centro-oeste";
                break;
            case 4:
                echo "região sudeste";
                break;
            case 5:
                echo "região sul";
                break;
        }
    ?>
    <br><br><a class=botao href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>