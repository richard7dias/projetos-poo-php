<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos especiais
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume()
    {
        return $this->volume;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function getTocando()
    {
        return $this->tocando;
    }
    private function setVolume($v)
    {
        $this->volume = $v;
    }
    private function setLigado($l)
    {
        $this->ligado = $l;
    }
    private function setTocando($t)
    {
        $this->tocando = $t;
    }


    //Métodos para interface
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo '<p>------------Menu------------</p>';
        echo ($this->getLigado() ? '<p>TV ligada</p>' : '<p>TV desligada</p>');
        echo ($this->getTocando() ? '<p>Está tocando.</p>' : '<p>Não está tocando.</p>');
        echo '<p>Volume:' . $this->getVolume() . '</p>';
        for ($i = 0; $i <= $this->getVolume(); $i += 5) {
            echo '|';
        }
        echo '<p>------------Menu------------</p>';
        echo '<br>';
    }
    public function fecharMenu()
    {
        echo 'Fechando o menu...';
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo 'Erro! TV desligada.';
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo 'Erro! TV desligada.';
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getLigado() && $this->getTocando() == false) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
