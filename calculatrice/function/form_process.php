<?php
  require_once 'function.php';

  if (dataIsValid()) {
    if ($_GET['operator'] == '+') {
      $result = $_GET['number1'] + $_GET['number2'];
    }
    if ($_GET['operator'] == '-') {
      $result = $_GET['number1'] - $_GET['number2'];
    }
    if ($_GET['operator'] == '/') {
      $result = $_GET['number1'] / $_GET['number2'];
    }
    if ($_GET['operator'] == '*') {
      $result = $_GET['number1'] * $_GET['number2'];
    }
  } else {
    ?> <p>Veuillez choisir un opérateur et entrer des valeurs de nombre valides</p>
  <?php }

  if (isset($result)) {?>
  <p>Resultat : <?php echo $result; ?></p>
<?php } ?>