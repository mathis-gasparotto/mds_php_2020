<?php

function dataIsValid(): bool
{
  if (isset($_GET['number1']) && isset($_GET['number2']) && !empty($_GET['operator']) && is_numeric($_GET['number1']) && is_numeric($_GET['number2'])) {
    return true;
  } else {
    return false;
  }
}