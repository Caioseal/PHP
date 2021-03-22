<?php
require_once 'animal.php';

class Peixe extends Animal {
    //Atributo
    private $corEscama;

    //Getter
    public function getCorEscama() {
        return $this->corEscama;
    }
    //Setter
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    //Funções
    public function locomover() {
        echo "<p>Nadando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não emite som</p>";
    }
    public function soltarBolha() {
        echo "<p>Soltou uma bolha</p>";
    }
}

?>