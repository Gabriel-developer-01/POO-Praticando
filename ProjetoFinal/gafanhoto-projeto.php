<?php

require_once "pessoa-projeto.php";
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;


    public function __construct($nome, $idade, $sexo ,$login){
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistirMaisum(){
        $this->totAssistido ++;
    }

    public function getLogin(){
        return $this->login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }

    public function setLogin($login){
        return $this->login = $login;
    }
    public function setTotAssistido($totAssistido){
        return $this->totAssistido = $totAssistido;
    }
}

?>