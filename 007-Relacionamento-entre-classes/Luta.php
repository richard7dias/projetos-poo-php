<?php
require_once 'Lutador.php';
class Luta
{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Métodos públicos
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo '<p>Empatou!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Dasafiado ganhou
                    echo '<p>' . $this->desafiado->getNome() . ' ganhou!</p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //Ganhou o desafiante
                    echo '<p>' . $this->desafiante->getNome() . ' ganhou!</p>';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo '<p>Luta não pode acontecer!';
        }
    }

    //Métodos especiais
    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }
    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }
    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }
    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}
