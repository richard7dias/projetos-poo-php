<?php
class ContaBanco
{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Construtor
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(true);
    }
    //Métodos especiais
    public function setNumConta($nc)
    {
        $this->numConta = $nc;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }
    public function getStatus()
    {
        return $this->status;
    }
    //Métodos
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->status = true;
        if ($t == "CC") {
            $this->setSaldo(50);
        } else {
            $this->saldo = 150;
        }
        echo '<p>Conta aberta.</p>';
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo '<p>Erro! Conta com saldo, realize o saque de R$' . $this->getSaldo() . '.</p>';
        } elseif ($this->getSaldo() < 0) {
            echo '<p>Conta com saldo negativo. Saldo atual de R$' . $this->getSaldo() . '</p>';
        } else {
            $this->setStatus(false);
            echo '<p>Conta de '. $this->getDono() .' encerrada.</p>';
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo '<p>Erro ao depositar.</p>!';
        }
    }
    public function sacar($v)
    {
        if ($this->getStatus() == false) {
            echo '<p>Conta inativa. Não é possível sacar.</p>';
        } else {
            if ($this->saldo >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo '<p>Erro! Valor pedido de R$' . $v . ' para a conta de ' . $this->getDono() . '. Saldo de: R$' . $this->getSaldo() . '. Portanto, saldo insuficiente.</p>';
            }
        }
    }
    public function pagarMensal()
    {
        $v = 0;
        if ($this->getTipo() == 'CC') {
            $v = 12;
        } else {
            $v = 20;
        }
        if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
            echo '<p>Mensalidade paga na conta de ' . $this->getDono() . ', no valor de R$' . $v . '. Saldo final R$' . $this->getSaldo() . '.</p>';
        } else {
            echo '<p>Saldo insuficiente para pagar mensalidade.</p>';
        }
    }
}
