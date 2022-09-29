<?php
require_once 'PessoaMae.php';
class Funcionario extends Pessoa
{
    //Atributos
    private $setor;
    private $trabalhando;

    //Métodos
    public function mudarTrabalho()
    {
        $this->setTrabalhando(false);
    }
    /*
    public function __construct($setor, $trabalhando)
    {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }
*/
    //Métodos especiais
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }
    public function getSetor()
    {
        return $this->setor;
    }
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }
}
