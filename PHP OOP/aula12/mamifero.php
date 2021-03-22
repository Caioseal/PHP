<?php
require_once 'animal.php';

class Mamifero extends Animal {
    //Atributo
    private $corPelo;

    //Getter
    function getCorPelo() {
        return $this->corPelo;
    }
    //Setter
    function setCorPelo($pelo) {
        $this->corPelo = $pelo;
    }

    //Funções
    public function locomover() {
        echo "<p>Correndo.</p>";
    }
    public function alimentar() {
        echo "<p>Mamando</p>";
    }
    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }
}
?>