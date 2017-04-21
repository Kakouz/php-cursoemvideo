<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 9</title>
    <style>
    span {
      color: red;
      font-weight: bold;
      text-shadow: 1px 1px 1px black;
    }
    </style>
  </head>
  <body>
    <?php
    /*Calcular a média do aluno
    Se o aluno estiver abaixo de 5 então Reprovado
    Se o aluno estiver entre 5 (inclusive) e 7 Recuperação
    Se o aluno estiver entre 7 (inclusive) e 10 Aprovado */
    $n1 = isset($_POST["n1"]) ? $_POST["n1"] : 0;
    $n2 = isset($_POST["n2"]) ? $_POST["n2"] : 0;
    $media = ($n1 + $n2) / 2;
    echo "A média entre <span>$n1</span>  e <span>$n2</span> é <span>$media</span>";
    if ($media < 5) {
      $sit = "REPROVADO";
      echo "<br /> A sua situação encontra-se como <span>$sit</span>";
    } elseif ($media >= 5 and $media < 7) {
      $sit = "RECUPERAÇÃO";
      echo "<br /> A sua situação encontra-se em <span>$sit</span>";
    } else {
      $sit = "APROVADO";
      echo "<br /> A sua situação encontra-se como <span>$sit</span>";
    }


     ?>
     <br />
     <a href="exercicio3.html">Voltar</a>
  </body>
</html>
