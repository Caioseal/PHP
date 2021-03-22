<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Conta em Banco</title>
</head>
<body>
    <pre>
    <?php
    require_once 'ContaBanco.php';

    $conta1 = new ContaBanco();
    $conta1->abrirConta("CC");
    $conta1->setDono("Jubileu");
    $conta1->depositar(300);
    $conta1->setNumConta(11111);
    $conta1->pagarMensal();

    $conta2 = new ContaBanco();
    $conta2->abrirConta("CP");
    $conta2->setDono("Creuza");
    $conta2->setnumConta(22222);
    $conta2->depositar(500);
    $conta2->sacar(100);
    $conta2->pagarMensal();

    print_r($conta1);
    print_r($conta2);
    ?>
    </pre>
</body>
</html>