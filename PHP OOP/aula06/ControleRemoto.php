<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador {
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos Especiais
        //__construct deu erro. Solução trocar pelo nome da classe
        public function ControleRemoto()  {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume() {
            return $this->volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar() {
            $this->setLigado(false);
        }
        public function abrirMenu() {
            echo "<p> ---- MENU ---- </p>";
            echo "<br>Está ligado? " . ($this->getLigado()? "SIM" : "NÃO");
            echo "<br>Está tocando? " . ($this->getTocando()? "SIM" : "NÃO");
            echo "<br>Volume: " . $this->getVolume();
            echo "  ";
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu() {
            echo "<br>Fechando o menu";

        }
        public function maisVolume() {
            if ($this->getLigado() == true ) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                echo "<p>Erro! Não é possível aumentar o volume!";
            }
        }
        public function menosVolume() {
            if ($this->getLigado() == true) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                echo "<p>Erro! Não é possível abaixar o volume!";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado() == true && $this->getVolume() > 0) {
                $this->setVolume(0);
            } else {
                echo "<p>Erro! Não é possível colocar em mudo!";
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() == true && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {
            if ($this->getLigado() == true && $this->getTocando() == false) {
                $this->setTocando(true);
            }
        }
        public function pause() {
            if ($this-> getLigado() == true && $this->getTocando() == false) {
                $this->setTocando(false);
            }
        }
    }
?>  