<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div>
    <?php
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos.";

        if ($idade < 16) {
            $vota = "Não vota";
        } 
        elseif (($idade >=16 && $idade <= 18) || ($idade > 65)) {
                $vota = "Voto opcional";
            }
             else {
                $vota = "Voto obrigatório";
            }

        echo "<br>A situação da sua votação é: $vota.";
    ?>
</div>
</body>
</html>