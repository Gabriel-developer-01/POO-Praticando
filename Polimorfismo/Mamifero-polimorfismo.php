<?php
require_once "Animal-polimorfismo.php";
Class Mamifero extends Animal {
private $corDoPelo;

public function locomover(){
    echo "<p>Correndo</p>";
}
public function alimentar(){
    echo "<p>Mamando</p>";
}
public  function emitirSom(){
    echo "<p>Som do mamífero</p>";
}

public function getCorDoPelo(){
    return $this->corDoPelo;
}
public function setCorDoPelo($corDoPelo){
    $this->corDoPelo = $corDoPelo;
}


}
?>