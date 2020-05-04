<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
</head>
<body>
<pre>
    <?php
    require_once "video-projeto.php";
    require_once "gafanhoto-projeto.php"; 
    require_once "visualizacao-projeto.php";
    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML5");

   $g[0] = new Gafanhoto("Jubileu",22, "M", "juba");
   $g[1] = new Gafanhoto("Creuza",12, "F", "Creuzita");
   $g[2] = new Gafanhoto("Kosko",19, "M", "BOLADAO");

   $visu[0] = new Visualizacao($g[0], $v[2]);
   $visu[1] = new Visualizacao($g[0], $v[1]);

   $visu[0]-> avaliar();
   $visu[1]->avaliarPorc(85);

   print_r($visu[0]);
   print_r($visu[1]);


  // print_r($v);
  // print_r($g);


    ?>
</pre>
</body>
</html>