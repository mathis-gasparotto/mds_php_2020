<?php 

include_once "layout/header.php";

/* unset($_SESSION['login']);
unset($_SESSION['page_counter']); */

$_SESSION = [];

header("Location: sign_in.php");
exit;
