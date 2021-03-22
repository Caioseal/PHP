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
    <form action="02-parte2.php" method="get">
    <?php
    $contador = 1;
    while ($contador <= 5) {
        echo "Valor $contador: <input type='number' name='v$contador' id='iv1' max='100' min='0' value='o'><br>";
        $contador++;
    }
    ?>
    <input type="submit" value="Enviar" class="botao">
    </form>
</div>
</body>
</html>