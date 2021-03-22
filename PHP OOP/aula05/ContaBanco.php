<?php
class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Método construtor - A conta é criada com saldo zero e ainda não está ativa.
    public function __construct() {
        $this->setSaldo = 0;
        $this->setStatus = false;
        echo "<p>Conta criada com sucesso</p>";
    }

    //Métodos
    public function abrirConta($t) {
        $this->setTipo($t); //Será informado se é uma conta corrente ou poupança
        $this->setStatus(true); //O status da conta passará para 'aberto'

        if ($t == "CC") { //Se for conta corrente, o banco dará 50 reais, se for poupança, 150 reais.
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        } else {
            echo "<p>Não foi possível abrir uma conta.</p>";
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) { //Para fechar a conta, o saldo deverá ser igual a zero, caso contrário dará erro.
            echo "<p>Não é possível encerrar a conta. Há saldo disponível para sacar.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Não é possível encerrar a conta. Há débito pendente de pagamento.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta encerrada com sucesso.</p>";
        }
    }

    public function depositar($v) {
        if ($this->getStatus()) { //Verificar se a conta está aberta
            $this->setSaldo($this->getSaldo() + $v); //Consulta o saldo e soma com o valor depositado.
        } else {
            echo "<p>Conta inativa. Impossível depositar.</p>";
        }
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) { //Se o saldo for maior que o valor que deseja sacar, debita do saldo.
                $this->setSaldo($this->getSaldo() - $v);
            } else { //Caso não haja saldo, acusar erro.
                echo "Saldo Insuficiente";
            } 
        } else { //Se a conta não estiver aberta, impossível sacar.
            echo "Impossível sacar";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") { //Se a conta for corrente irá pagar 12 reais.
            $v = 12;    
        }
        else if ($this->getTipo() == "CP") { //Conta poupança paga 20 reais
            $v = 20;
        }
        if ($this->getStatus()) { //Verificar se a conta está aberta e debita o valor correspondente.
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Problema com a conta. Não foi possível cobrar a mensalidade.";
        }
    }

    //Métodos Especiais
    public function setNumConta($n) {
        $this->numConta = $n;
    }

    public function getNumConta() {
        return $this-> numConta;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    public function getTipo() {
        return $this-> tipo;
    }

    public function setDono($d) {
        $this->dono = $d;
    }

    public function getDono() {
        return $this-> dono;
    }
    
    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setStatus($st) {
        $this->status = $st;
    }

    public function getStatus() {
        return $this-> status;
    }
}
?>