<?php
class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    public function ContaBanco()
    {
        $this->setSaldo(0);
        $this->setStatus(true);
    }
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
    //---------------------------------------
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->status = true;
        if ($t == "CC") {
            $this->setSaldo(50);
        } else {
            $this->saldo = 150;
        }
    }
    public function fecharConta()
    {
        if ($this->saldo > 0) {
            echo 'Conta com dinheiro';
        }
        if ($this->saldo < 0) {
            echo 'Conta no negativo';
        } else {
            $this->status = false;
        }
    }
    public function depositar($v)
    {
        if ($this->status == true) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo 'Erro ao depositar!';
        }
    }
    public function sacar($v)
    {
        if ($this->status == true && $this->saldo >= $v) {
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo 'Não é possível sacar';
        }
    }
    public function pagarMensal()
    {
        $v = 0;
        if ($this->tipo == 'CC') {
            $v = 12;
        } else {
            $v = 20;
        }
    }
}
