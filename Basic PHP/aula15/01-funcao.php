<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        function teste(&$x) {
            $x += 2;
            echo "O valor de X é $x.<br>";
        }

        $a = 3;
        teste($a);
        echo "O valor de A é $a.";
    ?>
</div>
</body>
</html>