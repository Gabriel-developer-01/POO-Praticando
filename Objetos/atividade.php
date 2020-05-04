<?php

Class ContaBanco{
    //atributos
     public $numConta;
     protected $tipo;
     private $dono;
     private $saldo;
     private $status;
//Métodos 
public function abrirConta($t){
$this->setTipo($t);
$this->setStatus(true);
if ($t == "CC"){
        $this->setSaldo(50);
    } elseif($t == "CP"){
        $this->setSaldo(150);
    }
}

public function fecharConta(){
    if ($this->getsaldo() > 0){
        echo "<p>Conta com dinheiro,não posso fechar!</p>";
    }elseif ($this->getsaldo() < 0){
        echo "Conta em débito,impossivel encerrar!";
    } else{
        $this->setStatus(false);
        echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
    }
}

public function depositar($v){
    if($this->getStatus()){
        $this->setSaldo($this->getSaldo() + $v);
        //$this->saldo = $this->saldo + v;
        echo "<p>Depósito de  R$$v na conta de " . $this->getDono() . "</p>";
    } else{
        echo "Impossível depositar";
    }
}

public function sacar($v){
    if($this->getStatus()){
        if ($this->getSaldo() >= $v){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Saque de $v autorizado na conta de " . $this->getDono() . "</p>";
     }else{
            echo "Saldo Insuficiente!";
        }
    }else{
        echo "Impossível sacar!";
    }
}

public function pagarMensal(){
    if($this->getTipo() == "CC"){
        $v = 12;
    }
   elseif ($this->getTipo() == "CP"){
        $v = 20;
    }
    if ($this->getStatus()){
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Mensalidade de R$$v na conta de " . $this->getDono() . "</p>";
    }else{
        echo "Problema com a conta.Não posso cobrar.";
    }

}
//Métodos especiais

public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
}

public function getnumConta(){
    return $this->numConta;
}
public function setnumConta($n){
    $this->numConta = $n;
}

public function getTipo(){
    return $this->tipo;
}
public function setTipo($t){
    $this->tipo = $t;
}

public function getDono(){
    return $this->dono;
}
public function setDono($d){
    $this->dono = $d;
}

public function getSaldo(){
    return $this->saldo;
}
public function setSaldo($s){
    $this->saldo = $s;
}

public function getStatus(){
    return $this->status;
}
public function setStatus($st){
    $this->status = $st;
}

}
?>