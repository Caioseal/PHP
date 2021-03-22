<?php
require_once 'Pessoa.php';
require_once 'Interface.php';

class Livro implements Publicação {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Construtor
    public function Livro($ti, $au, $totPa, $leitor) {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($totPa);
        $this->pagAtual = 0;
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    //Getters
    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    //Setters
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    function setAutor($autor) {
        $this->autor = $autor;
    }
    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
    //Método
    public function detalhes() {
        echo "<br><hr>";
        echo "<p><strong>Título:</strong> " . $this->getTitulo() . "</p>";
        echo "<p><strong>Autor:</strong> " . $this->getAutor() . "</p>";
        echo "<p><strong>Total de páginas: </strong>" . $this->getTotPaginas() . "</p>";
        echo "<p><strong>Página Atual: </strong>" . $this->getPagAtual() . "</p>";
        echo "<p><strong>Estado:</strong> ";
            if ($this->getAberto() == 0) {
                echo "Fechado";
            } else {
                echo "Aberto";
            }
        echo "<p><strong>Leitor: </strong>" . $this->leitor->getNome() . "</p>";
        echo "<hr>";
    }

    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($pagina) {
        if ($pagina > $this->totPaginas) {
            echo "<p>Essa página não existe</p>";
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pagina;
            $this->setAberto(true);
        }
    }
    public function avançarPag() {
        if ($this->pagAtual >= $this->totPaginas) {
            echo "<p>Não é possível avançar a página</p>";
        } else {
            $this->pagAtual ++;
            $this->setAberto(true);
        }
        
    }
    public function voltarPag() {
        if ($this->pagAtual <= 0) {
            echo "<p>Não é possível voltar a página</p>";
        } else {
            $this->pagAtual --;
        }
    }
}
?>