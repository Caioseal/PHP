<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <pre> 
    <?php
        $lista = array (array(6, 4),
                        array(4, 9),
                        array(3, 2));
        $lista[0][1] = $lista[2][0];
        print_r($lista);
    ?>
    </pre>
    
</div>
</body>
</html>