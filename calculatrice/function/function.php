<?php

function dataIsValid(): bool
{
  if (isset($_GET['number1']) && isset($_GET['number2']) && $_GET['operator'] !== 0) {
    return true;
  } else {
    return false;
  }
}