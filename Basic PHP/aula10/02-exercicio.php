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
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;
    switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar";
            break;
        case 7:
        case 8:
            echo "Descanse, pequeno gafanhoto";
            break;
        default:
        echo "Dia da semana inválido";
    }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>