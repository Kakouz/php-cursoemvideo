<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 5 - Aula 17</title>
  </head>
  <body>
      <?php
      $f = "Estou aprendendo PHP no Curso em Vídeo de PHP";
      $c = substr_count($f, "PHP");
      echo "PHP foi encontrado $c vezes <br />";

      $s = "Curso em Video";
      $sub = substr($s, 0, 3); //Pega a fatia da string [0 posição, 5 quantidade de letras]
      echo "$sub ";
     ?>
  </body>
</html>
