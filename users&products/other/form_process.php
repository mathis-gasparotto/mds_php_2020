<?php
// Validation côté serveur
// Est-ce qu'on a une valuer pour l'email, et est-ce que cet email est non valide
if (!empty($_POST['email'])) {
  echo 'Traitement du formulaire, quelque chose dans $_POST';
  // Est-ce que la valeur fournie est bien un email ?
  // Pour le savoir on va tenter de filtrer la valeur avec un filtre de vafidation d'email
  $filteredEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  if ($filteredEmail !== false) {
    $email = $_POST['email'];
    var_dump($_POST['email']);
  }
}
