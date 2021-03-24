<div id="connected">
  <?php
  if (isset($_SESSION['id'])) {
    $dsn = "mysql:dbname=mds_php;host=127.0.0.1;charset=utf8mb4";
    $pdo = new PDO($dsn, "mds_php", "NL6Syr5R18fZbdao");
    $stmt = $pdo->prepare("SELECT * FROM client WHERE id =?");
    $stmt->execute([$_SESSION['id']]);
  }

  if (isset($_SESSION['id'])) { ?>
    <div class="cercle_vert"></div>
    <a href="logout.php">Disconnect (<?php echo $_SESSION['username']; ?>)</a>
  <?php } else { ?>
    <div class="cercle_rouge"></div>
    <a href="sign_in.php">Sign In</a>
  <?php } ?>
</div>