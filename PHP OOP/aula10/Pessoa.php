<?php
    class Pessoa {
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Getters
        function getNome() {
            return $this->nome;
        }
        function getIdade(){
            return $this->idade;
        }
        function getSexo() {
            return $this->sexo;
        }
        
        //Setters
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        //Métodos
        function fazerAniversario() {
            $this->idade ++;
        }
    }
?>