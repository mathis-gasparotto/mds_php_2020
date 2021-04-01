<?php

include_once "layout/header.php";

if (isset($_SESSION['connected']) && $_SESSION['connected']) {
  header("Location: index.php");
  exit;
}


try {

  require_once "utils/connectToDB.php";

  if (
    isset($_POST['sign-in-submit'])
    && !empty($_POST['sign-in-submit'])
    && isset($_POST['login-in'])
    && !empty($_POST['login-in'])
    && isset($_POST['pass-in'])
    && !empty($_POST['pass-in'])
  ) {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE login =:username");
    $stmt->execute(['username' => $_POST['login-in']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      $signInError = "Nom d'utilisateur incorrect";
    } else {

      if ($_POST['pass-in'] == $user['pass']) {
        $_SESSION['connected'] = true;
        header("Location: index.php");
      } else {
        $signInError = "Mot de passe incorrect";
      }
    }
  } elseif (
    isset($_POST['sign-up-submit'])
    && !empty($_POST['sign-up-submit'])
    && isset($_POST['login-up'])
    && !empty($_POST['login-up'])
    && isset($_POST['pass-up'])
    && !empty($_POST['pass-up'])
    && isset($_POST['confirm-pass-up'])
    && !empty($_POST['confirm-pass-up'])
  ) {
    if ($_POST['pass-up'] == $_POST['confirm-pass-up']) {
      $stmt = $pdo->prepare("SELECT * FROM users WHERE login =:username");
      $stmt->execute(['username' => $_POST['login-up']]);
      if (!$stmt->fetch()) {
        $stmt = $pdo->prepare("INSERT INTO `users`(`login`, `pass`) VALUES (:username, :pass)");
        $stmt->execute([
          'username' => $_POST['login-up'],
          'pass' => $_POST['pass-up']
        ]);
        $_SESSION['connected'] = true;
        header("Location: index.php");
      } else {
        $signUpError = "Nom d'utilisateur déjà utilisé";
      }
    } else {
      $signUpError = "Confirmation du mot de passe incorrect";
    }
  }
} catch (\PDOException $e) {
  echo 'Erreur avec PDO : ' . $e->getMessage();
}


?>
<div id="sign-container">
  <div class="sign-form" id="sign-in">
    <h3>Se connecter</h3>
    <form method="POST" class="row g-3">
      <div class="mb-3">
        <label for="login-in" class="form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control" name="login-in" placeholder="Nom d'utilisateur" required />
      </div>
      <div class="mb-3">
        <label for="pass-in" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="pass-in" placeholder="Mot de passe" required />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="sign-in-submit" value="submit">Connexion</button>
      </div>
    </form>

    <div class="text-danger">
      <?php if (isset($signInError) && !empty($signInError)) {
        echo $signInError;
      } ?>
    </div>
  </div>


  <div class="sign-form" id="sign-up">
    <h3>S'inscrire</h3>
    <form method="POST" class="row g-3">
      <div class="mb-3">
        <label for="login-up" class="form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control" name="login-up" placeholder="Nom d'utilisateur" required />
      </div>
      <div class="mb-3">
        <label for="pass-up" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="pass-up" placeholder="Mot de passe" required />
      </div>
      <div class="mb-3">
        <label for="confirm-pass-up" class="form-label">Confirmation du mot de passe</label>
        <input type="password" class="form-control" name="confirm-pass-up" placeholder="Retapez le mot de passe" required />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="sign-up-submit" value="submit">Inscription</button>
      </div>
    </form>

    <div class="text-danger">
      <?php if (isset($signUpError) && !empty($signUpError)) {
        echo $signUpError;
      } ?>
    </div>
  </div>
</div>



<?php include_once "layout/footer.php";
