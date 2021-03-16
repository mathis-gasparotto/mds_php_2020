<?php
$dsn = "mysql:dbname=mds_php;host=127.0.0.1;charset=utf8mb4";
$pdo = new PDO($dsn, "mds_php", "NL6Syr5R18fZbdao");
$stmt = $pdo->query("SELECT * FROM client");
if (!$stmt) {
  die('Erreur lors de la requête');
}
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
