<?php
class Teclado
{
    var $cor;
    var $carga;
    var $marca;
    var $ligado;

    function ligar()
    {
        $this->ligado = true;
    }

    function desligar()
    {
        $this->ligado = false;
    }

    function teclar()
    {
        if ($this->ligado == true) {
            echo 'O teclado está ligado, pode digitar.';
        } else {
            echo 'O teclado está desligado, não pode digitar.';
        }
    }
}
