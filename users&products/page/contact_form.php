<?php require_once '../other/contact_form_process.php';?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Contact form</title>
  <link rel="stylesheet" href="../style/contact_form.css">
</head>

<body>
  <h1>Contact</h1>

  <?php if (isset($error) && $error) { ?>
    <div class="error">
      <p>Erreur : <br />
      Vérifiez que vous avez bien remplit toutes les cases</p>
    </div>
  <?php } ?>

  <form method="post" action="../other/contact_form_process.php">

    <div class="line">
      <label for="last_name">Nom* : </label>
      <input type="text" name="last_name" id="last_name" value="<?php if (isset($_POST['last_name'])) { echo $_POST['last_name'];} ?>" />
    </div>

    <div class="line">
      <label for="first_name">Prénom* : </label>
      <input type="text" name="first_name" id="first_name" required />
    </div>

    <div class="line">
      <label for="email">Email* : </label>
      <input type="email" name="email" id="email" required />
    </div>

    <legend class="line">Je suis inscrit au site* :
      <label for="radio_yes">Oui</label>
      <input type="radio" name="registered" id="radio_yes" value="yes" style="display: inline;" />
      <label for="radio_no">Non</label>
      <input type="radio" name="registered" id="radio_no" value="no" style="display: inline;" checked />
    </legend>

    <div class="line">
      <label for="subject">L'objet de votre demande* : </label>
      <select name="subject" id="subject">
        <option value="0">--Choisir une demande--</option>
        <option value="stage">Demande de stage</option>
        <option value="devis">Demande de devis</option>
        <option value="alternance">Demande d'alternance</option>
        <option value="other">Autre</option>
      </select>
    </div>

    <div class="line">
      <input type="checkbox" name="cgu" id="cgu" value="on" required />
      <label for="cgu">J'accepte les CGU*</label>
    </div>

    <div class="line">
      <label for="message">Message* : </label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <div class="line">
      <button type="submit">Enregistrer</button>
    </div>

  </form>
</body>

</html>