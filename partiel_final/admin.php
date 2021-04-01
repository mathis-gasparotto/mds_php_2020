<?php
require_once "layout/header.php";

if (!isset($_SESSION['connected']) || empty($_SESSION['connected'])) {
  header("Location: index.php");
  exit;
}

?>

<div class="content">
  <h1 class="title">MatiMajioAudio</h1>

  <h2 class="subtitle">Admin</h2>

  <?php
  try {

    require_once "utils/connectToDB.php";

    $stmt = $pdo->prepare("SELECT * FROM albums");
    $stmt->execute();
    $albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (\PDOException $e) {
    echo 'Erreur avec PDO : ' . $e->getMessage();
  }
  ?>
  <div id="albums-list">
    <?php foreach ($albums as $album) { ?>
      <div class="album-block-content">
        <h3 class="album-block-title"><?php echo $album['title'] ?> <span> - <?php echo $album['artist'] ?></span></h3>
        <img class="album-block-cover" src="<?php echo $album['cover'] ?>" alt="<?php echo $album['title'] ?>" />
        <div class="cta">
          <a href="editAlbum.php?id=<?php echo $album['id']; ?>">Modifier</a>
          <a id="album-delete-admin" class="btn btn-danger" href="deleteAlbum?id=<?php echo $album['id']; ?>">Supprimer</a>
        </div>
      </div>
    <?php } ?>
  </div>




  <?php
  require_once "layout/footer.php";
