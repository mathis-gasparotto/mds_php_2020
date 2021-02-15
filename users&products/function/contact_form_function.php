<?php

function requiredFieldsArePresent(string $data1 , string $data2 , string $data3 , string $data4 , string $data5 , string $data6 , string $data7): bool
{
  return (!empty($_POST[$data1]) &&
  !empty($_POST[$data2]) &&
  !empty($_POST[$data3]) &&
  // Utilisation de isset pour vérifier la présence
  // Attention, empty renvoie 'true' si la valeur vaut 0
  // Et pour la donnée 'registered', il se trouve qu'on peut recevoir la valeur 0
  isset($_POST[$data4]) &&
  !empty($_POST[$data5]) &&
  !empty($_POST[$data6]) &&
  !empty($_POST[$data7]));
}

function isFormSubmitted(): bool
{
  return !empty($_POST);
}

function dataIsValid(): bool
{
  $filteredEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  if ($filteredEmail !== false && 
    ($_POST['registered'] == 0 || $_POST['registered'] == 1) &&
    $_POST['subject'] !== 0
  ) {
    return true;
  } else {
    return false;
  }
}