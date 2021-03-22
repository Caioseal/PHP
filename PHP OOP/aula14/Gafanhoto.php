<?php
require_once 'Pessoa1.php';

//Quando é uma classe, deve-se utilizar EXTENDS
class Gafanhoto extends Pessoa {
    //Atributos
    private $login;
    private $totAssistido;

    //Contrutor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->login = $nome . $idade;
        $this->experiencia = 0;
        $this->totAssistido = 0;
    }

    //Getter
    public function getLogin() {
        return $this->login;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }

    //Setter
    protected function setLogin($login) {
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

    //Função
    public function ganharExp() {
        echo "<p>Mais experiência.";
    }
    public function viuMaisUm() {
        $this->totAssistido ++;
    }
}
?>