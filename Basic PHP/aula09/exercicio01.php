<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos.";

        if ($idade > 18) {
            $votar = "já pode votar";
            $dirigir = "já pode dirigir";
        }
        else {
            $votar = "não pode votar";
            $dirigir = "não pode dirigir";
        }

        echo "<br>Com essa idade você $votar e $dirigir.";

    ?>
</div>
</body>
</html>