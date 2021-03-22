<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {
    //Atributos
    private $especialidade;
    private $salario;

    //Getters
    function getEspecialidade() {
        return $this->especialidade;
    }
    function getSalario() {
        return $this->salario;
    }

    //Setters
    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    function setSalario($salario) {
        $this->salario = $salario;
    }
}
?>