<?php
  require_once 'function/function.php';

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
  }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculatrice</title>
</head>

<body>
  <h1>Calculatrice</h1>

  <form>
    <input type="number" name="number1" id="number1" required />
    <select name="operator" id="operator">
      <option value="0" selected>--Choisissez un opérateur--</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">x</option>
    </select>
    <input type="number" name="number2" id="numer2" required>
    <button type="submit">Calculer</button>

    <p>Resultat : <?php echo $result; ?></p>

  </form>
</body>

</html>