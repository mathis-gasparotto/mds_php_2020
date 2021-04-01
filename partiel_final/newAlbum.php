<?php
require_once "layout/header.php";

if (!isset($_SESSION['connected']) || empty($_SESSION['connected'])) {
  header("Location: index.php");
  exit;
}


if (isset($_POST['create-album-submit']) && !empty($_POST['create-album-submit'])) {
  if (
    isset($_POST['title'])
    && !empty($_POST['title'])
    && isset($_POST['artist'])
    && !empty($_POST['artist'])
    && isset($_POST['cover'])
    && !empty($_POST['cover'])
  ) {
    try {

      require_once "utils/connectToDB.php";


      $stmt = $pdo->prepare("SELECT * FROM albums WHERE title =:title AND artist =:artist");
      $stmt->execute([
        'title' => $_POST['title'],
        'artist' => $_POST['artist']
      ]);
      if (!$stmt->fetch()) {
        $stmt = $pdo->prepare("INSERT INTO albums (artist, title, cover) VALUES (:artist, :title, :cover)");
        $album = $stmt->execute([
          'artist' => $_POST['artist'],
          'title' => $_POST['title'],
          'cover' => $_POST['cover']
        ]);
        if (!$album) {
          $createError = "L'album n'a pas pu être enregistré";
        } else { ?>
          <div class="alert alert-success">
            L'album a bien été enregistré
          </div>
<?php }
      } else {
        $createError = "L'album n'a pas pu être enregistré car il existe déjà";
      }
    } catch (\PDOException $e) {
      echo 'Erreur avec PDO : ' . $e->getMessage();
    }
  } else {
    $createError = "L'album n'a pas pu être enregistré </br> Vérifiez que tous les champs soient bien rempli";
  }
}
?>


<div id="create-album-form" class="album-form">
  <h3 class="title">Nouvel Album</h3>
  <form method="POST" class="row g-3">
    <div class="mb-3">
      <label for="title" class="form-label">Nom de l'album</label>
      <input type="text" class="form-control" name="title" placeholder="Album" required />
    </div>
    <div class="mb-3">
      <label for="artist" class="form-label">Nom de l'artiste</label>
      <input type="text" class="form-control" name="artist" placeholder="Artiste" required />
    </div>
    <div class="mb-3">
      <label for="cover" class="form-label">Lien vers la pochette d'album</label>
      <input type="text" class="form-control" name="cover" placeholder="ex : http://mathis-gasparotto.site/site-vraiment-trop-bien-skurrt.png .." required />
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="create-album-submit" value="submit">Ajouter l'album</button>
    </div>
  </form>

  <div class="text-danger">
    <?php if (isset($createError) && !empty($createError)) {
      echo $createError;
    } ?>
  </div>
</div>




<?php
require_once "layout/footer.php";
