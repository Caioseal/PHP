<?php
class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;

    //Construtor
    public function Pessoa($no, $id, $se) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }

    //Getters
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
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
    
    //Método
    public function fazerAniver() { //Ganha mais um ano de idade
        $this->setIdade($this->getIdade() + 1);
    }
    public function status() {
        echo "<br><hr>";
        echo "<p><strong>Nome:</strong> " . $this->getNome() . "</p>";
        echo "<p><strong>Idade:</strong> " . $this->getIdade() . "</p>";
        echo "<p><strong>Sexo:</strong> " . $this->getSexo() . "</p>";
        echo "<hr>";
    }
}
?>