<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 7 - Aula 17</title>
  </head>
  <body>
      <?php
      $t = str_repeat("PHP ", 5);
      echo "$t ";
      print(str_repeat("-", 20));
     ?> <br>
     <?php
      $f = "Gosto de estudar Matemática!!!";
      $nf = str_replace("Matemática", "PHP", $f); //Troca a str Matemática pela str PHP, precisa de valor identico
      echo "$nf <br />";
      $nf = str_ireplace("matemática", "PHP", $f); //Troca a str Matemática pela str PHP, ignora o valor identico
      echo "$nf";
      ?>
  </body>
</html>
