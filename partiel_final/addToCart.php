<?php require_once "layout/header.php";

$_SESSION['cart'][$_GET['id']] = ['id' => $_GET['id']];

header("Location: cart.php");
