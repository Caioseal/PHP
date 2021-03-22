<?php
require_once 'Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;
    function renovarBolsa() {
        echo "<p>Bolsa do aluno " . $this->getNome() . " renovada </p>.";
    }
    //Sobreposição da função pagarMensalidade() que existe na classe Aluno.php
    function pagarMensalidade() {
        echo "<p>O aluno " . $this->getNome() . " é bolsista, portanto, paga com " . $this->getBolsa() . " de desconto.</p>";
    }

    //Getter
    function getBolsa() {
        return $this->bolsa;
    }
    //Setter
    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
?>