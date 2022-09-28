<?php
class Caneta
{
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;


    public function __construct($m, $p, $c) //Ou se preferir posso colocar no lugar de __construct(), o mesmo nome da classe, no caso Caneta().
    {
        $this->modelo = $m;
        $this->ponta = $p;
        $this->cor = $c;
        $this->tampar();
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }

    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($c)
    {
        $this->cor = $c;
    }

    public function tampar()
    {
        $this->tampada = true;
    }
}
