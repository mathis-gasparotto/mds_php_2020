<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculatrice</title>
</head>

<body>
  <h1>Calculatrice</h1>

  <form action="function/form_process.php">
    <input type="number" name="number1" id="number1" required />
    <select name="operator" id="operator">
      <option value="" selected>--Choisissez un opérateur--</option>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="/">/</option>
      <option value="*">x</option>
    </select>
    <input type="number" name="number2" id="numer2" required>
    <button type="submit">Calculer</button>
    
  </form>
</body>

</html>