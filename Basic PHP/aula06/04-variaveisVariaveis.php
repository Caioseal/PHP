<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Variáveis Variáveis</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variável X é $x.";
            echo "<br>A variável ABC recebeu o valor $abc";
        ?>
    </div>
</body>
</html>