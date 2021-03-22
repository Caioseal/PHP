<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    //Atributos
    protected $espectador;
    protected $filme;

    //Construtor
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getviews() + 1);
        //O método setViews e getViews está no arquivo Video.php, que foi passado no segundo parâmetro ($filme) ao criar. 
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        //O método de setTotAsistido e GetTotAssistido está no arquivo Gafanhoto.php, que foi passado no primeiro parâmetro ao criar.
    }
    //Getter
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }
    //Setter
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }
    //Funções
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem) {
        $nova = 0;
        if ($porcentagem < 20) {
            $nova = 3;
        } elseif ($porcentagem <= 50) {
            $nova = 5;
        } elseif ($porcentagem <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}
?>