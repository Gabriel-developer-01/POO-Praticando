<?php
require_once "publicacao-livro.php";
require_once "Pessoa-livro.php";

Class Livro implements Publicacao{
    //  Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Métodos
   public function detalhes(){
    echo "<hr>Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
    echo "<br> Páginas: " . $this->getTotPaginas() . ", páginas atual: " . $this->pagAtual;
    echo "<br> Sendo lido por " . $this->leitor->getNome() . " RG: " . $this->leitor->getRg();
   }
   public function __construct($titulo, $autor, $totPaginas,$leitor){
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->totPaginas = $totPaginas;
       $this->pagAtual = 0;
       $this->aberto = false;
       $this->leitor = $leitor;
   }

   //Métodos especiais

   public function getTitulo(){
    return $this->titulo;
    }
    public function setTitulo($titulo){
    $this->titulo = $titulo;
    }
    
    public function getAutor(){
    return $this->autor;
    }
    public function setAutor($autor){
    $this->autor = $autor;
    }
    
    public function getTotPaginas(){
    return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas){
    $this->totPaginas = $totPaginas;
    }
    
    public function getPagAtual(){
    return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
    $this->pagAtual = $pagAtual;
    }
    
    public function getAberto(){
    return $this->aberto;
    }
    public function setAberto($aberto){
    $this->aberto = $aberto;
    }
    
    public function getLeitor(){
    return $this->leitor;
    }
    public function setLeitor($leitor){
    $this->leitor = $leitor;
    }
    //  Métodos Especiais implements
    public function abrir(){
        $this->setAberto($this->getAberto(true));
    }

    public function fechar(){
        $this->setAberto($this->getAberto(false));
    }

    public function folhear($p){
        if ($p > $this->getTotPaginas()){
            $this->pagAtual = 0;
        }
        else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual() - 1);
    }



}

?>