<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;

    public function __construct($bolsa)
    {
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa()
    {
        $this->setBolsa(true);
        echo '<p>Bolsa de ' . $this->getNome() . ' renovada.</p>';
    }
    public function perderBolsa()
    {
        $this->setBolsa(false);
        echo '<p>' . $this->getNome() . ' perdeu a bolsa.</p>';
    }
    public function pagarMensalidade()
    {
        if ($this->bolsa === true) {
            echo '<p>Pagando mensalidade de ' . $this->getNome() . ' com desconto de bolsista.</p>';
        } else {
            echo '<p>Pagando mensalidade de ' . $this->getNome() . ' no valor integral. Bolsa temporariamente inativa.</p>';
        }
    }


    public function getBolsa()
    {
        if ($this->bolsa === true) {
            $this->bolsa = 'Bolsa ativa';
        } else {
            $this->bolsa = 'Bolsa inativa';
        }
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
