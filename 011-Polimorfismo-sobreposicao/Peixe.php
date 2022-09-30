<?php
require_once 'Animal.php';
class Peixe extends Animal
{
    protected $corEscama;


    public function soltarBolha()
    {
        echo '<p>Soltando bolhas...</p>';
    }
    public function locomover()
    {
        echo '<p>Nadando</p>';
    }
    public function alimentar()
    {
        echo '<p>Comendo substâncias</p>';
    }
    public function emitirSom()
    {
        echo '<p>Som de peixe</p>';
    }

    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
