<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
        $atual = $_GET["aa"]; //Essa linha vai pegar o ano na URL
        echo "O ano atual é $atual.";
        echo "<br>O ano anterior é o " . --$atual;
        ?>
    </div>
</body>
</html>