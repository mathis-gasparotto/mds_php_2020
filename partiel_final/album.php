<?php
require_once "layout/header.php";

try {

  require_once "utils/connectToDB.php";
  $stmt = $pdo->prepare("SELECT * FROM albums WHERE id =:id");
  $stmt->execute(['id' => $_GET['id']]);
  $album = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}
?>
<div class="content">
  <div id="album-content">
    <h1><?php echo $album['title'] ?></h1>
    <h2><?php echo $album['artist'] ?></h2>
    <img class="album-cover" src="<?php echo $album['cover'] ?>" alt="<?php echo $album['title'] ?>" />
    <a href="addToCart?id=<?php echo $album['id']; ?>">Ajouter au panier</a>
  </div>
</div>

<?php require_once "layout/footer.php";
