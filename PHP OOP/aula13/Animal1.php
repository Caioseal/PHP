<?php
abstract class Animal1 {
    //Atributos    
    protected $peso;
    protected $idade;
    protected $membros;
    
    //Getter
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembros() {
        return $this->membros;
    }

    //Setter
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setMembros($membros) {
        $this->membros = $membros;
    }

    public abstract function emitirSom();
}
?>