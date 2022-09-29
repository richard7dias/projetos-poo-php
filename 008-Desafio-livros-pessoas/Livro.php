<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Construct
    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = '-';
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    //Métodos
    public function detalhes()
    {
        echo '<p>Título: ' . $this->getTitulo() . '<br>Autor: ' . $this->getAutor() . '<br>Total de páginas: ' . $this->getTotPaginas() . '<br>Página atual: ' . $this->getPagAtual() . '<br>Aberto: ' . $this->getAberto() . '<br>Leitor: ' . $this->leitor->getNome() . '</p>';
    }

    //Métodos especiais
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    public function getPagAtual()
    {
        if ($this->aberto === false) {
            $this->pagAtual = '-';
        } elseif ($this->pagAtual == 0) {
            $this->fechar();
        }
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto()
    {
        $escrita = 'true';
        if ($this->aberto === true) {
            $escrita = 'Livro aberto';
        } else {
            $escrita = 'Livro fechado';
        }
        return $escrita;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    //Implementações
    public function abrir()
    {
        $this->aberto = true;
        $this->setPagAtual(1);
    }
    public function fechar()
    {
        $this->aberto = false;
        $this->setPagAtual('-');
    }
    public function folhear($p)
    {
        if ($p <= $this->getTotPaginas()) {
            $this->setPagAtual($p);
        } else {
            echo 'Página não encontrada.';
        }
    }
    public function avancarPag()
    {
        if ($this->getPagAtual() < $this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo 'O livro ' . $this->getTitulo() . ' acabou.';
        }
    }
    public function voltarPag()
    {
        if ($this->getPagAtual() <= 1) {
            $this->fechar();
        } else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
}
