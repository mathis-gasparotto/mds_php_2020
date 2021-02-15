<?php
require_once "../data/products.php";
require_once "../layout/header.php";
?>

<link href="../style/products.css" rel="stylesheet" />
</head>

<body>

    <div id="content">
        <h1>Tous les produits</h1>


        <div id="products_list">
            <?php foreach ($products as $product) {
            require "../other/product_item.php"; 
            }?>
        </div>
    </div>

<?php require_once "../layout/footer.php"; ?>