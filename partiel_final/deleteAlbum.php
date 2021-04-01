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

  if (isset($_GET['confirm']) && $_GET['confirm'] == 1) {
    $stmt = $pdo->prepare('DELETE FROM albums WHERE id = :id');
    $stmt->execute(['id' => $_GET['id']]);

    header('Location: admin.php');
    exit;
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}
?>

<div class="container">
  <div class="alert alert-danger">
    Voulez-vous vraiment supprimer cet album ?
  </div>

  <div class="btn-group" role="group">
    <a href="admin.php" class="btn btn-danger">Non</a>
    <a href="deleteAlbum.php?id=<?php echo $_GET['id']; ?>&confirm=1" class="btn btn-primary">Oui</a>
  </div>
</div>



<?php
require_once "layout/footer.php";
