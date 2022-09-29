<?php
class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Métodos constrtutores
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    //Métodos
    public function apresentar()
    {
        echo '<p>-------------------------------------------------------------------</p>';
        echo '<p>O lutador ' . $this->getNome() . ', vindo do seu país ' . $this->getNacionalidade() . ' com ' . $this->getIdade() . ' anos, pesando ' . $this->getPeso() . 'kg, tendo ' . $this->getAltura() . 'm de altura, está atualmente com ' . $this->getVitorias() . ' vitórias, ' . $this->getDerrotas() . ' derrotas e ' . $this->getEmpates() . ' empates. </p>';
    }
    public function status()
    {
        echo '<p>-------------------------------------------------------------------</p>';
        echo '<p>Nome: ' . $this->getNome() . '<br> Nacionalidade: ' . $this->getNacionalidade() . '<br> Idade ' . $this->getIdade() . ' anos<br> Altura: ' . $this->getAltura() . ' m<br> Peso: ' . $this->getPeso() . ' kg<br> Categoria: ' . $this->getCategoria() . '<br> Vitórias: ' . $this->getVitorias() . '<br> Derrotas: ' . $this->getDerrotas() . '<br> Empates: ' . $this->getEmpates() . '</p>';
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    //Getters e Setters
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        //$this->setCategoria();
    }
    public function getCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->setCategoria('Inválido: Abaixo do peso.');
        } elseif ($this->getPeso() <= 70.3) {
            $this->setCategoria('Leve');
        } elseif ($this->getPeso() <= 83.9) {
            $this->setCategoria('Médio');
        } elseif ($this->getPeso() <= 120.2) {
            $this->setCategoria('Pesado');
        } else {
            $this->setCategoria('Invalido: acima do peso.');
        }
        return $this->categoria;
    }
    private function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
