<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
        echo "<h2> Mostrando a tabuada de $numero <br></h2>";
        $contador = 1;
        $resultado = 0;
        do {
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado <br>";
            $contador ++;
        } while ($contador <=10 );
        

    ?>
    <br>
    <p><a href="03-exercicio.html" class="botao">Voltar</a></p>
</div>
</body>
</html>