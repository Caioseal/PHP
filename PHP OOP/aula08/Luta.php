<?php
require_once 'Lutador.php';
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
            $this-> aprovada = true;
            $this-> desafiado = $lutador1;
            $this-> desafiante = $lutador2;
        } else {
            $this-> aprovada = false;
            $this-> desafiado = null;
            $this-> desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0: //Empate
                    echo "<br><br><p>EMPATE</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " venceu!</p>";
                    $this-> desafiado->ganharLuta();
                    $this-> desafiante->perderLuta();
                break;
                case 2: //Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                break;
            }
        } else {
            echo "<p>Luta não permitda!</p>";
        }
    }

    //Getters
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function getAprovada() {
        return $this->aprovada;
    }

    //Setters
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}
?>