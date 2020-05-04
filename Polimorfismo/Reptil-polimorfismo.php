<?php

require_once "Animal-polimorfismo.php";

Class Reptil extends Animal{

private $corEscama;

public function locomover(){
    echo "<p>Rastejando</p>";
}
public function alimentar(){
    echo "<p>Comendo Vegetais</p>";
}
public  function emitirSom(){
    echo "<p>Som do Réptil</p>";
}

public function getCorEscama(){
    return $this->corEscama;
}
public function setPeso($corEscama){
    $this->corEscama = $corEscama;
}



}

?>