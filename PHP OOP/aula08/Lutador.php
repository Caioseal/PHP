<?php
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Construtor
    public function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    //Getters
    function getNome() {
        return $this->nome;
    }
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    function getIdade() {
        return $this->idade;
    }
    function getAltura() {
        return $this->altura;
    }
    function getPeso() {
        return $this->peso;
    }
    function getCategoria() {
        return $this->categoria;
    }
    function getVitorias() {
        return $this->vitorias;
    }
    function getDerrotas() {
        return $this->derrotas;
    }
    function getEmpates() {
        return $this->empates;
    }
    //Setters
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function setAltura($altura) {
        $this->altura = $altura;
    }
    function setPeso($peso) {
        $this->peso = $peso;
        $this -> setCategoria();
    }
    function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    function setEmpates($empates) {
        $this->empates = $empates;
    }

    //Métodos
    public function apresentar() {
        echo "<p>------------------------</p>";
        echo ("<p><strong>Lutador:</strong> " . $this->getNome() . "</p>");
        echo ("<p><strong>Nacionalidade:</strong> " . $this->getNacionalidade() . "</p>");
        echo ("<p><strong>Idade:</strong> " . $this->getIdade() . " anos</p>");
        echo ("<p><strong>Altura:</strong> " . $this->getAltura() . "m</p>");
        echo ("<p><strong>Peso:</strong> " . $this->getPeso() . "kg</p>");
        echo ("<p><strong>Categoria:</strong> " . $this->getCategoria());
        echo ("<p><strong>Ganhou:</strong> " . $this->getVitorias());
        echo ("<p><strong>Empatou:</strong> " . $this->getEmpates());
        echo ("<p><strong>Perdeu:</strong> " . $this->getDerrotas());
    }
    public function status() {
        echo "<p>----------------------</p>";
        echo ("<p><strong>Lutador:</strong> " . $this->getNome() . "</p>");
        echo ("<p><strong>Ganhou:</strong> " . $this->getVitorias() . "</p>");
        echo ("<p><strong>Empatou:</strong> " . $this->getEmpates() . "</p>");
        echo ("<p><strong>Perdeu:</strong> " . $this->getDerrotas() . "</p>");
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
?>