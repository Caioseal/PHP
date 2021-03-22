<?php
require_once 'Pessoa.php';

class Funcionário extends Pessoa {
    //Atributos
    private $setor;
    private $trabalhando;

    //Getters
    function getSetor() {
        return $this->setor;
    }
    function getTrabalhando() {
        return $this->trabalhando;
    }

    //Setters
    function setSetor($setor) {
        $this->setor = $setor;
    }
    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    function mudarTrabalho() {
        $this->trabalhando = ! $this->trabalhando;
        //Recebe 'não' trabalhando
    }
}
?>