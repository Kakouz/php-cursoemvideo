<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 14</title>
  </head>
  <body>
    <?php #Exemplo de função com valores multiplos
    function soma() {
      $p = func_get_args();
      $t = func_num_args();
      $s = 0;
      for($i = 0; $i < $t; $i++) {
        $s += $p[$i];
      }
      return $s;
    }
    $r = soma(3,5,2,4,10);
    echo "A soma é $r";
     ?>
  </body>
</html>
