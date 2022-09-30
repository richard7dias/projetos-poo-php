<?php
abstract class Animal
{
    protected $tipo;
    protected $idade;
    protected $membros;

    public function __construct($tipo, $idade, $membros)
    {
        $this->tipo = $tipo;
        $this->idade = $idade;
        $this->membros = $membros;
    }

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of membros
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set the value of membros
     *
     * @return  self
     */
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}
