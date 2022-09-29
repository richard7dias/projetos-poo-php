<?php
require_once 'PessoaMae.php';
class Professor extends Pessoa
{
    //Atributos
    private $especialidade;
    private $salario;

    //Métodos
    public function receberAum($aum)
    {
        $this->setSalario($this->getSalario() + $aum);
    }

    public function __construct($especialidade, $salario)
    {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    //Métodos especiais
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
}
