<?php
require_once 'animal.php';

class Reptil extends Animal {
    //Atributo
    private $corEscama;

    //Getter
    function getCorEscama() {
        return $this->corEscama;
    }
    //Setter
    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    //Funções
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }
}
?>