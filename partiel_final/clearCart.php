<?php
require_once "layout/header.php";

try {

  require_once "utils/connectToDB.php";

  if (isset($_GET['confirm']) && $_GET['confirm'] == 1) {
    unset($_SESSION['cart']);

    header("Location: cart.php");

    exit;
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}
?>

<div class="container">
  <div class="alert alert-danger">
    Voulez-vous vraiment vider votre panier ?
  </div>

  <div class="btn-group" role="group">
    <a href="cart.php" class="btn btn-danger">Non</a>
    <a href="clearCart.php?confirm=1" class="btn btn-primary">Oui</a>
  </div>
</div>