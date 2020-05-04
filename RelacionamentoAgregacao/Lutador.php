<?php

Class Lutador {
//       Atributos
private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;

//    Métodos Especias

public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);

}

public function getNome(){
    return $this->nome;
}
public function setNome($no){
    $this->nome = $no;
}

public function getNacionalidade(){
    return $this->nacionalidade;
}
public function setNacionalidade($na){
    $this->nacionalidade = $na;
}

public function getIdade(){
    return $this->idade;
}
public function setIdade($idade){
    $this->idade = $idade;
}

public function getAltura(){
    return $this->altura;
}
public function setAltura($altura){
    $this->altura = $altura;
}

public function getPeso(){
    return $this->peso;
}
public function setPeso($peso){
    $this->peso = $peso;
    $this->setCategoria();
}

public function getCategoria(){
    return $this->categoria;
}
private function setCategoria(){
    if ($this->peso < 52.2){
        $this->categoria = "Inválido";
    }
    elseif ($this->peso <= 70.3){    
        $this->categoria = "Leve";
    }
    elseif ($this->peso <= 83.9){
        $this->categoria = "Médio";
    }
    elseif ($this->peso <= 120.2){
        $this->categoria = "Pesado";
    }
    else{
        $this->categoria = "Inválido";
    }

}

public function getVitorias(){
    return $this->vitorias;
}
public function setVitorias($vitorias){
    $this->vitorias = $vitorias;
}

public function getDerrotas(){
    return $this->derrotas;
}
public function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
}

public function getEmpates(){
    return $this->empates;
}
public function setEmpates($empates){
    $this->empates = $empates;
}


//    Métodos

public function apresentar(){
    echo "<hr>";
    echo "CHEGOU A HORA! O LUTADOR " . $this->getNome();
    echo " Veio diretamente de  " . $this->getNacionalidade();
    echo  " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG";
    echo "<br>Ele tem ". $this->getVitorias() . " vitórias, ";
    echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
}
public function status(){
    echo "<hr>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
    echo " e já ganhou " . $this->getVitorias() . " vezes";
    echo " perdeu " . $this->getDerrotas() . " vezes";
    echo " empatou "  . $this->getEmpates() . " vezes!";
}

public function ganharLuta(){
    $this->setVitorias($this->getVitorias() +1);
}

public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() +1);
}

public function empatarLuta(){
    $this->setEmpates($this->getEmpates() +1);
}


} //fechamento da classe Lutador

?>