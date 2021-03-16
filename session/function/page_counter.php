<?php 

function page_counter() 
{
  if(session_status() == PHP_SESSION_ACTIVE) {
    if (isset($_SESSION['page_counter'])) {
      $_SESSION['page_counter']++;
    } else {
      $_SESSION['page_counter'] = 1;
    }
  } else {
    session_start();
    if (isset($_SESSION['page_counter'])) {
      $_SESSION['page_counter']++;
    } else {
      $_SESSION['page_counter'] = 1;
    }
  }
}
