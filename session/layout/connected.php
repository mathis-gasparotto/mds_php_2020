<div id="connected">
  <?php
  if (isset($_SESSION['login'])) { ?>
    <div class="cercle_vert"></div>
    <a href="logout.php">Disconnect (<?php echo $_SESSION['login']; ?>)</a>
  <?php } else { ?>
    <div class="cercle_rouge"></div>
    <a href="sign_in.php">Sign In</a>
  <?php } ?>
</div>