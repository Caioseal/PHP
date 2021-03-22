<?php
    require_once 'Pessoa.php';
    
    class Aluno extends Pessoa {
        //Atributos
        private $matricula;
        private $curso;

        //Getters
        function getMatricula() {
            return $this->matricula;
        }
        function getCurso() {
            return $this->curso;
        }
        
        //Setters
        function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        function setCurso($curso){
            $this->curso = $curso;
        }

        //Métodos
        function cancelarMatr() {
            echo "<p>Matricula cancelada</p>";
        }
}
?>