<?php
require_once "../data/products.php";
require_once "../layout/header.php";

if (!isset($_GET['id'])) {
  die ("ID obligatoire");
}

$id = $_GET['id'];

?>

</head>
<body>

  <?php
  foreach ($products as $product) {
    if ($id == $product['id']) {
      require_once "../products/product_item.php";
    }
  }

  ?>


<?php require_once "../layout/footer.php"; ?>