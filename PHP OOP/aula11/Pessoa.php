<?php 
abstract class Pessoa {
    protected $nome; //Como protected, qualquer classe filha poderá acesssar
    protected $idade;
    protected $sexo;
    public final function fazerAniversario() {
        $this->idade++;
    }
    //Getters
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function geSexo() {
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
}
?>