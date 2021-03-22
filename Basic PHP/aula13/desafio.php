<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $numero = isset($_GET["num"]) ? $_GET["num"] : 2;
        $multiplos = 0;
        $contador = 1;
        echo "Analisando o número $numero
        ...<br><br>";
        echo "Valores múltiplos: ";
        for ($contador = 1; $contador <= $numero; $contador++) {
            if ($numero % $contador == 0) {
                $multiplos++;
                echo "$contador;  ";
            }
        }
        echo "<br><br>Total de múltiplos: $multiplos";
        echo "<br><br>Resultado: $numero ";
        if ($multiplos >= 3) {
            echo "NÃO É PRIMO!";
        } else {
            echo "É PRIMO!";
        }
    ?>
</div>
</body>
</html>