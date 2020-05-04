<?php
require_once "acoesVideo.php";
Class Video implements acoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;


    public function play(){
        $this->reproduzindo = true;
    }

    public function pausar(){
        $this->reproduzindo = false;
    }

    public function like(){
        $this->curtidas ++;
    }

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;  
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function getViews(){
        return $this->views;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    
    public function setTitulo($titulo){
        return $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao){
        $media = ($avaliacao + $this->avaliacao)/$this->views; 
        return $this->avaliacao = $media;
    }
    public function setViews($views){
        return $this->views = $views;
    }
    public function setCurtidas($curtidas){
        return $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo){
        return $this->reproduzindo = $reproduzindo;
    }
}

?>