<?php
require_once 'animal.php';

class Ave extends Animal {
    //Atributo
    private $corPena;

    //Getter
    public function getCorPena() {
        return $this->corPena;
    }
    //Setter
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    //Funções
    public function locomover() {
        echo "<p>Voando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    public function fazerNinho() {
        echo "<p>Construiu um ninho</p>";
    }
}
?>