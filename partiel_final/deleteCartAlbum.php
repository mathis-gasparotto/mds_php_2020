<?php require_once "layout/header.php";

unset($_SESSION['cart'][$_GET['id']]);

header("Location: cart.php");

exit;
