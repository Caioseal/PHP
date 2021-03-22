<?php
abstract class Animal {
    //CLASSE ABSTRATA QUE NÃO PODE INSTANCIAR UM OBJETO
    //Atributos
    protected $peso;
    protected $idade;
    protected $membros;

    //Getters
    function getPeso() {
        return $this->peso;
    }
    function getIdade() {
        return $this->idade;
    }
    function getMembros() {
        return $this->membros;
    }
    //Setters
    function setPeso($peso) {
        $this->peso = $peso;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function setMembros($membros) {
        $this->membros = $membros;
    }

    //Funções    
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
}
?>