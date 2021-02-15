<?php require_once "../function/product_function.php"; ?>

    <div class="product">

        <img class="img_product" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />

        <div class="name">
            <span class="product_name">
                <?php echo $product['name']; ?>
            </span>

            <?php if ($product['promo']) { ?>
                <span class="product_promo">Promotion</span>
            <?php } ?>

            <div class="categories">
                <p class="categories_title">Les catégrories :</p>
                <ul class="categories_content">
                    <?php foreach ($product["categories"] as $categorie) { ?>
                        <li class="categorie">
                            <?php echo $categorie ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>

        </div>


        <p class="price">
            <?php echo getPriceTtc($product['price']); ?> €
        </p>

        <p>
            <a href="product.php?id=<?php echo $product['id']?>">Voir le produit</a>
        </p>


    </div>