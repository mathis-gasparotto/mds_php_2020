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

  if (isset($result)) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $operator = $_GET['operator']; ?>
    <p><?php echo "$number1 $operator $number2 = $result"; ?></p>
<?php } ?>