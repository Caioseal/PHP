<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança em PHP</title>
</head>
<body>
<pre>
    <?php
        require_once 'Bolsista.php';
        $b1 = new Bolsista();
        $b1->setNome("Caio");
        $b1->setIdade(28);
        $b1->setSexo("M");
        $b1->setMatricula(123456);
        $b1->setCurso("Desenvolvimento de Sistemas");
        $b1->setBolsa("10%");
        $b1->pagarMensalidade();

        print_r($b1);
    ?>
</pre>
</body>
</html>