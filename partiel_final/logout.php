<?php
require_once "layout/header.php";
unset($_SESSION['connected']);

header("Location: index.php");

exit;
