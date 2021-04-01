<?php
$dsn = "mysql:dbname=mds_php_partiel-final;host=127.0.0.1;charset=utf8mb4";
$pdo = new PDO($dsn, "mds_php_partiel-final", "TrifqGpLK2dvJJL8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
