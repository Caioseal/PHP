<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Métodos Especiais</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Caneta.php';

        $c1 = new Caneta("BIC", "Vermelha", 0.7);
        $c2 = new Caneta("CIB", "Verde", 0.4);
        print_r($c1);
        print_r($c2);

        /*$c1 = new Caneta();
        $c1->setModelo("BIC");
        $c1->setPonta(0.5);
        echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";*/
        ?>
    </pre>
</body>
</html>
