<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mes clients</title>
</head>

<body>
  <h1>Mes clients</h1>

  <form>
    <input type="checkbox" name="registered" id="registered" <?php if (isset($_GET['registered']) && $_GET['registered'] = "on") {
                                                                echo "checked";
                                                              } ?> />
    <label for="registered">Abonnés à la newsletter</label>
    <input type="submit" value="Filtrer" name="filter_submit" />
  </form>

  <a href="index.php">Reset</a>
  </br>

  <?php
  //Pour discuter avec mons erveur de base de données,
  //je veux construire un objet PDO
  //Pour le constuire, le vais lui fournire :
  //- un DSN (Data Source Name)
  //- un nom d'utilisateur (tel que nous l'avons créer la dernière fois)
  //- un mot de passe (tel que nous l'avons créer la dernière fois)
  //je vais mettre cet objet dans une variable

  $dsn = "mysql:dbname=mds_php;host=127.0.0.1;charset=utf8mb4";
  $pdo = new PDO($dsn, "mds_php", "NL6Syr5R18fZbdao");

  //Sur l'objet pdo, je vais appeler la méthode query, qui me permettera d'effectuer une requête vers mon serveur de base de données
  //En paramètre de cette méthode, je vais donc lui passer la requête que je souhaite exécuter

  if (isset($_GET['filter_submit']) && $_GET['filter_submit'] = "Filtrer") {
    if (isset($_GET['registered']) && $_GET['registered'] = "on") {
      $stmt = $pdo->query("SELECT * FROM client WHERE newsletter_registered = 1");
    } else {
      $stmt = $pdo->query("SELECT * FROM client WHERE newsletter_registered = 0");
    }
  } else {
    $stmt = $pdo->query("SELECT * FROM client");
  }

  if (!$stmt) {
    die('Erreur lors de la requête');
  }
  //Je lui passe l'option PDO::fetch_ASSOC pour lui indiquer que je souhaite que mes résultats soient sour forme de tableau associatif
  //Dans les talbeaux associatifs, les clés seront les noms des colonnes de ma table
  $clients = $stmt->fetchAll(PDO::FETCH_ASSOC); //recupère tout

  foreach ($clients as $client) {
    echo $client['firstname'] . ' ' . $client['name'] . '</br>';
  }
  ?>
</body>

</html>