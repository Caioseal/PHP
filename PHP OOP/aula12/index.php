<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
<pre>
    <?php
        require_once 'reptil.php';
        require_once 'mamifero.php';
        require_once 'peixe.php';
        require_once 'ave.php';
        require_once 'canguru.php';
        require_once 'tartaruga.php';

        $m = new Mamifero();
        $m->setPeso(33.5);
        $m->setIdade(5);
        $m->setMembros(4);
        $m->setCorPelo('Branco');
        $m->locomover();

        $a = new Ave();
        $a->locomover();

        $r = new Reptil();
        $r->locomover();

        $c = new Canguru();
        $c->usarBolsa();

        $t = new Tartaruga();
        $t->locomover();


    ?>
</pre>
</body>
</html>