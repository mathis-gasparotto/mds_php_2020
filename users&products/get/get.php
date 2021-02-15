<?php

require_once "../data/products.php";

require_once "../layout/header.php";

?>
</head>
<body>
<?php

// si $_GET['nom'] est nul
// alors ça arrête le code et affiche "Le nom est requi ... "
if (!isset($_GET['nom'])) {
  die("Le nom est requi pour la recherche");
}

$name_search = $_GET['nom'];

foreach ($products as $product) {
  if (strtolower($name_search) == strtolower($product['name'])) {
    require_once "../other/product_item.php"; ?>
    <?php
  }
}
?>

<?php require_once "../layout/footer.php"; ?>