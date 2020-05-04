<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 9 Exercicio Livro</title>
</head>
<body>
<pre>
<?php

require_once "Livro.php";
require_once "Pessoa-livro.php";

$p[0] = new Pessoa("KOSKO BOLADAO", 22, "7874552655", "M");
$p[1] = new Pessoa("Suellen", 21, "595964514", "F");
$p[2] = new Pessoa("Carlos dos Santos", 23, "3213201312","M");

$l[0] = new Livro("PHP BASIC", "José da Silva", 300, $p[0]);
$l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[1]);
$l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[2]);

$l[0]->abrir();
$l[0]->folhear(80);
$l[0]->detalhes();

$l[1]->folhear(230);
$l[1]->detalhes();

$l[2]->detalhes();
?>
</pre>
</body>
</html>