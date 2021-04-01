<?php
require_once "layout/header.php";
?>

<div class="content">
  <h1 class="title">Panier</h1>

  <div id="albums-cart">
    <?php

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
      try {

        require_once "utils/connectToDB.php";


        foreach ($_SESSION['cart'] as $album) {
          $stmt = $pdo->prepare("SELECT * FROM albums WHERE id=:id");
          $stmt->execute(['id' => $album['id']]);
          $album = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
          <div class="album-cart-block">
            <h3 class="album-cart-block-title"><?php echo $album['title'] ?> <span> - <?php echo $album['artist'] ?></span></h3>
            <img class="album-cart-block-cover" src="<?php echo $album['cover'] ?>" alt="<?php echo $album['title'] ?>" />
            <div class="cta">
              <a class="album-cart-block-delete btn btn-danger" href="deleteCartAlbum.php?id=<?php echo $album['id']; ?>">Supprimer</a>
            </div>
          </div>
        <?php } ?>
      <?php
      } catch (\PDOException $e) {
        echo 'Erreur avec PDO : ' . $e->getMessage();
      }
    } else { ?>
      <p id="error-cart">Aucun album dans le panier</p>
    <?php } ?>

  </div>
  <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
    <a id="clearCart-button" class="btn btn-danger" href="clearCart.php">Vider le panier</a>
  <?php } ?>

</div>


<?php require_once "layout/footer.php";
