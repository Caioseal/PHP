<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Teste de Controle Remoto</title>
</head>
<body>
<div>
<h2>Projeto Controle Remoto</h2>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $controle1 = new ControleRemoto();
            $controle1-> ligar();
            $controle1-> maisVolume();
            $controle1-> maisVolume();
            $controle1-> play();
            $controle1-> abrirMenu();
        ?>
    </pre>
</div>
</body>
</html>