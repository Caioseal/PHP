<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Wrap</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        $frase = "Gosto de estudar matemática";
        $novaFrase = str_replace("matemática", "PHP", $frase);
        echo $novaFrase;
    ?>

</div>
</body>
</html>