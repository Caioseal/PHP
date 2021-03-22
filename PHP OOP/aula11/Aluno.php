<?php
require_once 'Pessoa.php';

//HERANÇA PARA DIFERENÇA

class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    function pagarMensalidade() {
        echo "<p>Pagando mensalidade do Aluno " . $this->getNome() . " </p>";
    }

    //Getters
    function getMatricula() {
        return $this-> matricula;
    }
    function getCurso() {
        return $this-> curso;
    }
    //Private
    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    function setCurso($curso) {
        $this->curso = $curso;
    }
}
?>