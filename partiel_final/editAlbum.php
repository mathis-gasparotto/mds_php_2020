<?php
require_once "layout/header.php";

if (!isset($_SESSION['connected']) || empty($_SESSION['connected'])) {
  header("Location: index.php");
  exit;
}

if (!isset($_GET['id'])) {
  require_once "templates/error.php";
  exit;
}
try {

  require_once "utils/connectToDB.php";

  $stmt = $pdo->prepare("SELECT * FROM albums WHERE id = :id");
  $stmt->execute(['id' => $_GET['id']]);
  $album = $stmt->fetch(PDO::FETCH_ASSOC);

  if (isset($_POST['edit-album-submit']) && !empty($_POST['edit-album-submit'])) {
    if (
      isset($_POST['title'])
      && !empty($_POST['title'])
      && isset($_POST['artist'])
      && !empty($_POST['artist'])
      && isset($_POST['cover'])
      && !empty($_POST['cover'])
    ) {

      if ($_POST['title'] !== $album['title']) {
        $stmt = $pdo->prepare("UPDATE albums SET title =:title WHERE id=:id");
        $verif_title = $stmt->execute([
          'title' => $_POST['title'],
          'id' => $_GET['id']
        ]);
      } else {
        $verif_title = true;
      }

      if ($_POST['artist'] !== $album['artist']) {
        $stmt = $pdo->prepare("UPDATE albums SET artist =:artist WHERE id=:id");
        $verif_artist = $stmt->execute([
          'artist' => $_POST['artist'],
          'id' => $_GET['id']
        ]);
      } else {
        $verif_artist = true;
      }

      if ($_POST['cover'] !== $album['cover']) {
        $stmt = $pdo->prepare("UPDATE albums SET cover =:cover WHERE id=:id");
        $verif_cover = $stmt->execute([
          'cover' => $_POST['cover'],
          'id' => $_GET['id']
        ]);
      } else {
        $verif_cover = true;
      }

      if ($verif_title && $verif_artist && $verif_cover) { ?>
        <div class="alert alert-success">
          L'album a bien été mis à jour
        </div>
        <?php header("Location: admin.php"); ?>
<?php } else {
        $editError = "L'album n'a pas pu être mis à jour";
      }
    } else {
      $editError = "L'album n'a pas pu être mis à jour </br> Vérifiez que tous les champs soient bien rempli";
    }
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}

?>


<div id="edit-album-form" class="album-form">
  <h3 class="title">Modifier l'album <?php echo $album['title']; ?> de <?php echo $album['artist']; ?></h3>
  <form method="POST" class="row g-3">
    <div class="mb-3">
      <label for="title" class="form-label">Nom de l'album</label>
      <input type="text" class="form-control" name="title" placeholder="Album" value="<?php echo $album['title']; ?>" required />
    </div>
    <div class="mb-3">
      <label for="artist" class="form-label">Nom de l'artiste</label>
      <input type="text" class="form-control" name="artist" placeholder="Artiste" value="<?php echo $album['artist']; ?>" required />
    </div>
    <div class="mb-3">
      <label for="cover" class="form-label">Lien vers la pochette d'album</label>
      <input type="text" class="form-control" name="cover" placeholder="ex : http://mathis-gasparotto.site/site-vraiment-trop-bien-skurrt.png .." value="<?php echo $album['cover']; ?>" required />
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="edit-album-submit" value="submit">Modifier</button>
    </div>
  </form>

  <div class="text-danger">
    <?php if (isset($editError) && !empty($editError)) {
      echo $editError;
    } ?>
  </div>
</div>




<?php
require_once "layout/footer.php";
