<?php
require_once '../function/contact_form_function.php';


if (isFormSubmitted()) {
  // Analyse des données du formulaire
  if (requiredFieldsArePresent('email' , 'last_name' , 'first_name' , 'registered' , 'subject' , 'cgu' , 'message') && dataIsValid()) {
    header('Location: thankyou.php');
    die();
  } else {
    $error = true;
  }
}
