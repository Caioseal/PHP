<?php
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($modelo, $cor, $ponta) { //ou o nome da Classe que é Caneta
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    public function tampar() {
        $this->tampada = True;
    }
    
    public function getModelo() {
        return $this -> modelo;
    }

    public function setModelo($m) {
        $this -> modelo = $m;
    }

    public function getPonta() {
        return $this -> ponta;
    }
    
    public function setPonta($p) {
        $this -> ponta = $p;
    }
}
?>