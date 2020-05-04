<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Polimorfismo</title>
</head>
<body>
    <?php
    require_once "Mamifero-polimorfismo.php";
    require_once "Reptil-polimorfismo.php";
    require_once "Peixe-polimorfismo.php";
    require_once "Ave-polimorfismo.php";
    require_once "canguru.php";
    require_once "cachorro.php";
    require_once "cobra.php";
    require_once "Tartaruga.php";
    require_once "goldFish.php";
    require_once "Arara.php";

    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $c = new Canguru();
    $k = new Cachorro();
    $t = new Tartaruga();

    $m->emitirSom();
    $k->emitirSom();
    $c->emitirSom();

    ?>
</body>
</html>