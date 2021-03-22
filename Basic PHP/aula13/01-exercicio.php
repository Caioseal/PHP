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
    <form action="02-tabuada.php" method="get">
    <select name="num">
        <?php
            for ($indice = 1; $indice <=10; $indice++) {
                echo "<option>$indice</option>";
            }
        ?>
    </select>
    <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>