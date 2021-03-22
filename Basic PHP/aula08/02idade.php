<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exercicio 02</title>
</head>
<body>
<div>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nome não informado]" ; //'isset' significa foi configurado, se foi passado como parâmetro
    $ano = isset($_GET["ano"]) ? $_GET["ano"]: 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "[Sexo não informado]";
    $idade = date("Y") - $ano;
    echo "$nome é $sexo e tem $idade anos."
    ?>

<br><br>
<a href="02-exercicio.html">Voltar</a>

</div>
</body>
</html>