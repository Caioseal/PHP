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
    $num = isset($_GET["num"]) ? $_GET["num"] : 0;
    $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;

    switch ($oper) {
        case 1:
            $resultado = $num * 2;
            break;
        case 2:
            $resultado = $num ^ 3;
            break;
        case 3:
            $resultado = sqrt($num);
    }
    echo "O resultado da operação é <span class='foco'>$resultado</span>";
    ?>
    <br>
    <a href="01-exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>