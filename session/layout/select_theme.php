<?php

if (isset($_POST['theme'])) {

  if ($_POST['theme'] == "light") {
    $_SESSION['theme'] = "light";
  }

  if ($_POST['theme'] == "dark") {
    $_SESSION['theme'] = "dark";
  }
} 

?>


<form method="post">
  <select name="theme">
    <option value="light" <?php if(isset($_SESSION['theme']) && $_SESSION['theme'] == "light") { echo "selected" ; } ?> >Light </option>
    <option value="dark" <?php if(isset($_SESSION['theme']) && $_SESSION['theme'] == "dark") { echo "selected" ; } ?>>Dark</option>
  </select>

  <input type="submit" value="Validate" name="theme_valid" />
</form>
