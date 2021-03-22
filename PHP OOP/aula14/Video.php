<?php
require_once 'Interface.php';

//Quando é uma Interface, deve-se utilizar IMPLEMENTS
class Video implements Controlador {
    //Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($nome) {
        $this->titulo = $nome;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //Getters
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function getViews() {
        return $this->views;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    //Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao) {
        $media = (($this->avaliacao + $avaliacao) / $this->views);
        $this->avaliacao = $media;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function setCuridas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
    //Funções
    public function play() {
        $this->reproduzindo = true;
    }
    public function pause() {
        $this->reproduzindo = false;
    }
    public function like() {
        $this-> curtidas ++;
    }
}
?>