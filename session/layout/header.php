<?php 
session_start();
require_once "function/page_counter.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>session</title>
  <link href="style/style.css" rel="stylesheet" />
</head>

<?php 
$theme_body = "light_body";

require "select_theme.php";
require "connected.php";

if (isset ($_SESSION['theme'])) {

  if ($_SESSION['theme'] == "light") {
    $theme_body = "light_body";
  }

  if ($_SESSION['theme'] == "dark") {
    $theme_body = "dark_body";
  }
} 

?>

<body class="<?php echo $theme_body; ?> " >
