<?php

include_once "layout/header.php";

/* unset($_SESSION['login']);
unset($_SESSION['page_counter']); */

unset($_SESSION['id']);
unset($_SESSION['page_counter']);

header("Location: sign_in.php");
exit;
