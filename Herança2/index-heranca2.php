<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Herança 2</title>
</head>
<body>
    <pre>
    <?php
    require_once "Aluno-heranca2.php";
    require_once "Bolsista-heranca2.php";
    /*$v1 = new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo("M");
    print_r($v1);*/
    $al = new Aluno();
    $al->setNome("Pedro");
    $al->setMatricula(1111);
    $al->setIdade(16);
    $al->setSexo("M");
    $al->setCurso("Informática");
    $al->pagarMensalidade();
    print_r($al);


    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->setIdade(17);
    $b1->pagarMensalidade();
    print_r($b1);



    ?>
    </pre>
</body>
</html>