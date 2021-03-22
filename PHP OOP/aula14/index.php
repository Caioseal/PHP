<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 14</title>
</head>
<body>
<pre>
<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';

    $video[0] = new Video("Video de PHP");
    $video[1] = new Video("Video de HTML");

    $gaf = new Gafanhoto("Caio", 28, "M");

    $vis[0] = new Visualizacao($gaf, $video[0]);
    $vis[0]->avaliar();
    $vis[0] = new Visualizacao($gaf, $video[0]);
    $vis[0]->avaliarNota(8);
    print_r($vis);
?>
</pre>
</body>
</html>