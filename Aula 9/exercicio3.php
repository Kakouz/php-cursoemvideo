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

    $n1 = isset($_POST["n1"]) ? $_POST["n1"] : 0; //Confere a média N°1 [se não por = 0]
    $n2 = isset($_POST["n2"]) ? $_POST["n2"] : 0; //Confere a média N°2 [se não por = 0]
    $media = ($n1 + $n2) / 2; //calcula a media
    echo "A média entre <span>$n1</span>  e <span>$n2</span> é <span>$media</span>"; //diz o valor das notas e qual foi a média calculada
    if ($media < 5) { //Confere a situação [REPROVADO se menor que 5]
      $sit = "REPROVADO";
      echo "<br /> A sua situação encontra-se como <span>$sit</span>";
    } elseif ($media >= 5 and $media < 7) { //Confere a situação [RECUPERAÇÃO maior que 5 (INCLUSIVE) e menor que 7]
      $sit = "RECUPERAÇÃO";
      echo "<br /> A sua situação encontra-se em <span>$sit</span>";
    } else { //Confere a situação [APROVADO maior que 7 (inclusive)]
      $sit = "APROVADO";
      echo "<br /> A sua situação encontra-se como <span>$sit</span>";
    }


     ?>
     <br />
     <a href="exercicio3.html">Voltar</a>
  </body>
</html>
