<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Polimorfismo2</title>
</head>
<body>
<?php

require_once "Mamifero2.php";
require_once "lobo2.php";
require_once "Cachorro2.php";
$c = new Cachorro();


$c->reagirIdadePeso(2, 12.5);
$c->reagirIdadePeso(17,4.5);



?>
    
</body>
</html>