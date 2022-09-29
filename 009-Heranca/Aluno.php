<?php
require_once 'PessoaMae.php';
class Aluno extends Pessoa
{
    //Atributos
    private $matr;
    private $curso;

    //Métodos
    public function cancelarMatr()
    {
        $this->matr = '<p>Matrtícula cancelada</p>';
    }
    
    public function __construct($matr, $curso)
    {
        $this->matr = $matr;
        $this->curso = $curso;
    }

    //Métodos especiais
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
    public function getMatr()
    {
        return $this->matr;
    }
    public function setMatr($matr)
    {
        $this->matr = $matr;
    }
}
