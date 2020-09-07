<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Calculatrice en PHP</title>
</head>

<body>
  <h1>Ma Calculatrice en PHP:</h1>
  <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="numeric" name="nb1" placeholder="Premier Nombre">
    <br>
    <br>
    <input type="radio" name="operation" value="add" checked="true"> +
    <input type="radio" name="operation" value="susb"> -
    <input type="radio" name="operation" value="mul"> *
    <input type="radio" name="operation" value="modulo"> %
    <br>
    <br>
    <input type="numeric" name="nb2" placeholder="Deuxième Nombre">
    <br>
    <br>
    <input type="submit" value="Faire le calcule">
    <br>
  </form>

  <?php
  // echo ("Here is my php");
  if (isset($_POST['nb1']) && ($_POST['nb2']) && ($_POST['operation'])) {
    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $operation = $_POST['operation'];

    if (is_numeric($nb1) && is_numeric($nb2)) {
      if ($operation != null) {
        switch ($operation) {
          case "add":
            $result = $nb1 + $nb2;
            break;
          case "susb":
            $result = $nb1 - $nb2;
            break;
          case "mul":
            $result = $nb1 * $nb2;
            break;
          case "modulo":
            $result = $nb1 % $nb2;
            break;
        }
        echo ("<br>Résultat de Calcul:<b> $result</b>");
      }
    } else {
      echo ("<br>Données invalide, veillez ré-essayer ");
    }
  }
  ?>

</body>

</html>