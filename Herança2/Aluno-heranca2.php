<?php
require_once "Pessoa-heranca2.php";
Class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno <strong>$this->nome</strong></p>";
    }

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }


}

?>