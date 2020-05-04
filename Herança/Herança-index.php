<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança</title>
</head>
<pre>
<body>
<?php
require_once "Herança-pessoa.php";
require_once "Herança-aluno.php";
require_once "Herança-profissional.php";
require_once "Herança-funcionario.php";

$p1 = new Pessoa(); 
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Fabiana");

$p1->setSexo("M");
$p4->setSexo("F");


$p2->setCurso("Informática");
$p3->setSalario(2500.75);
$p4->setSetor("Estoque");

$p3->receberAumento(530.20);
$p4->mudarTrabalho();
$p2->cancelarMatr();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>
</body>
</html>