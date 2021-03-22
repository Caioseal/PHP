<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Curso em Video</title>
</head>
<body>
<div>
    <?php
        for ($indice = 1; $indice <= 10; $indice++) {
            echo "$indice ";
        }
        echo "<br><br>";
        
        for ($indice = 10; $indice >= 1; $indice--) {
            echo "$indice ";
        }
        echo "<br><br>";

        for ($indice = 0; $indice <= 50; $indice += 5) {
            echo "$indice ";
        }
        echo "<br><br>";

        for ($indice = 20; $indice >= 0; $indice -= 2) {
            echo "$indice ";
        }
    ?>
</div>
</body>
</html>