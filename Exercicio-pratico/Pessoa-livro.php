<?php

Class Pessoa {
    //  Atributos
    private $nome;
    private $idade;
    private $sexo;
    private $rg;
    // Métodos
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }

    public function __construct($nome, $idade, $rg, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->rg = $rg;
        $this->sexo = $sexo;
        
    }
    // Métodos Especiais 
        public function getNome(){
        return $this->nome;
        }
        public function setNome($nome){
        $this->nome = $nome;
        }
        
        public function getIdade(){
        return $this->idade;
        }
        public function setIdade($idade){
        $this->idade = $idade;
        }
        
        public function getSexo(){
        return $this->sexo;
        }
        public function setSexo($sexo){
        $this->sexo = $sexo;
        }
        public function getRg(){
        return $this->rg;
        }
        public function setRg($rg){
        $this->rg = $rg;
         }
    

}

?>