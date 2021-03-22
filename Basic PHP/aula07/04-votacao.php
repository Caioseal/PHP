<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Votação</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["ano"];
            $idade = 2020 - $ano;
            echo "Quem nasceu em $ano tem $idade anos.";
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "<br>VOTO $tipo";
        ?>
    </div>
</body>
</html>