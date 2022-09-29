<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        $this->setBolsa(true);
    }
    public function pagarMensalidade()
    {
    }


    public function getBolsa()
    {
        if ($this->bolsa == true){
            $this->bolsa = 'Bolsa ativa.';
        } else {
            $this->bolsa = 'Bolsa inativa.';
        }
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
