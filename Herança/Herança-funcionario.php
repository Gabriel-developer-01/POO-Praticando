<?php
require_once "Herança-pessoa.php";

Class Funcionario extends Pessoa{
    //  Atributos
    private $setor;
    private $trabalhando;

    //  Métodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    //  Métodos Especiais

    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }




}

?>