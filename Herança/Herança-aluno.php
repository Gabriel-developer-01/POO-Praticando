<?php
require_once "Herança-pessoa.php";

Class Aluno extends Pessoa {
     // Atributos
    private $matr;
    private $curso;
    // Métodos
    public function cancelarMatr(){
        echo "<p>Matrícula será cancelada</p>";
    }

    //  Métodos Especiais
    public function getMatr(){
        return $this->matr;
    }
    public function setMatr($matr){
        $this->matr = $matr;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }



}

?>