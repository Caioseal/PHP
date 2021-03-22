<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é igual a $media<br>";
        
        if ($media < 5) {
            $situação = "REPROVADO";
        } elseif ($media >=5 && $media <7){
            $situação = "RECUPERAÇÃO";
        } else {
            $situação = "APROVADO";
        }
        echo "A situação do aluno é $situação"
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>