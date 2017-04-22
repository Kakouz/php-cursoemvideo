<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 11</title>
  </head>
  <body>
    <?php
    /* Recebe valores da url*/
    $inicio = $_GET["inicio"];
    $final = $_GET["final"];
    $valor = $_GET["valor"];

    //Checa se o inicio foi maior que o final
    if ($inicio > $final) {
      $cont1 = $final;
      $cont2 = $inicio;
      switch ($valor) {
        case 1: #-1
          while ($cont1 <= $cont2) {
            echo $cont2 . "<br />";
            $cont2 -= $valor;
          }
          break;
        case 2: #-2
        while ($cont1 <= $cont2) {
          echo $cont2 . "<br />";
          $cont2 -= $valor;
        }
          break;
        case 3: #-3
        while ($cont1 <= $cont2) {
          echo $cont2 . "<br />";
          $cont2 -= $valor;
        }
          break;
        case 4: #-4
        while ($cont1 <= $cont2) {
          echo $cont2 . "<br />";
          $cont2 -= $valor;
        }
         break;
        case 5: #-5
        while ($cont1 <= $cont2) {
          echo $cont2 . "<br />";
          $cont2 -= $valor;
        }
          break;
        default:
        echo "Erro";
          break;
      }
    } else {
      $cont1 = $inicio;
      $cont2 = $final;
    }
      switch ($valor) {
        case 1: #+1
          while ($cont1 <= $cont2) {
            echo $cont1 . "<br />";
            $cont1 += $valor;
          }
          break;
        case 2: #+2
        while ($cont1 <= $cont2) {
          echo $cont1 . "<br />";
          $cont1 += $valor;
        }
          break;
        case 3: #+3
        while ($cont1 <= $cont2) {
          echo $cont1 . "<br />";
          $cont1 += $valor;
        }
          break;
        case 4: #+4
        while ($cont1 <= $cont2) {
          echo $cont1 . "<br />";
          $cont1 += $valor;
        }
         break;
        case 5: #+5
        while ($cont1 <= $cont2) {
          echo $cont1 . "<br />";
          $cont1 += $valor;
        }
          break;
        default:
        echo "Erro";
          break;
      }
    ?>
    <a href="Exercicio3.php">Voltar</a>
  </body>
</html>
