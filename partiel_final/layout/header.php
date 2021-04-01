<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <title>MatiMajioAudio</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">

            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
            <a class="nav-link" href="cart.php">Panier</a>

            <?php if (!isset($_SESSION['connected'])) { ?>

              <a class="nav-link" href="login.php">Se connecter</a>

            <?php } elseif (isset($_SESSION['connected']) && $_SESSION['connected']) { ?>

              <a class="nav-link" href="admin.php">Albums enregistrés</a>
              <a class="nav-link" href="newAlbum.php">Nouvel album</a>
              <a class="nav-link" href="logout.php">Déconnexion</a>

            <?php } ?>

          </div>
        </div>
      </div>
    </nav>
  </header>