<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div>
    <?php
        function soma() {
            $parametro = func_get_args(); //Cria um vetor com o nome 'parametro' e insere os valores informados.
            $total = func_num_args(); //Informa a quantidade de valores informados.
            $soma = 0;
            for ($indice = 0; $indice < $total; $indice++) {
                $soma = $soma + $parametro[$indice]; //Cria um looping e soma os números informados.
            }
            return $soma;
        }
        $resultado = soma(3,5,2);
        echo "A soma dos valores é $resultado";
    ?>
</div>
</body>
</html>