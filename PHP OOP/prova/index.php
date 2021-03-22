<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        abstract class Pai {
            public function herdado() {
                $this->sobreescrito();
            }
            protected function sobreescrito() {
                echo 'pai';
            }
        }
        class filha extends Pai {
            protected function sobreescrito()
            {
                echo 'filha';
            }
        }
        $teste = new filha();
        $teste->herdado();
    ?>

    <!--
        -Imagem n carregou. Forma não é superclasse de FormaBidiensaional. Forma é progenitora de triangulo.
        -Método Final n pode ser sobreescrito. Classe Abstrata nunca será instanciada. Classe Final não pode ser superclasse. Método abstrato deverá ter uma implementação na classe filha.
        -Exercicio sobreescrito, aparecerá a palavra filha.
        -Exemplo de superclasse - subclasse. Automóvel > Motocicleta....Alcateia > Lobo seria um objeto.
        -Mesma classe há diversos métodos com o mesmo nome é uma SOBRECARGA.
        -Sobre POO, Encapsulamento garante que somente as interfaces fiquem disponíveis.
        -Quando na mesma clase, há diversos métodos com o mesmo nome, há SOBRECARGA.
        -Herança é um mecanismo que permite o programador basear uma nova classe na definição de uma que já existe.
        -Os autores Booch, Rumbaugh e Jacobson criaram a Linguagem de Modelagem Unificada.
        -Manutenível - Visa alterações futuras para que todos possam se beneficiar.
        - Um objeto pode conter outro objeto por meio de uma AGREGAÇÃO. Quando temos variáveis internas que são instâncias de outras classes, temosuma COMPOSIÇÃO.

        -->
    </pre>
</body>
</html>