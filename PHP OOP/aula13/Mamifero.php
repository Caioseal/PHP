<?php
require_once 'Animal1.php';

class Mamifero extends Animal1 {
    //Atributo
    protected $corPelo;

    //Getter
    public function getCorPelo() {
        return $this->corPelo;
    }
    //Setter
    public function setCorPelo($pelo) {
        $this->corPelo = $pelo;
    }
    //Funções
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
}
?>