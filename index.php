<?php
$nom = "GASPAROTTO";
$prenom = "Mathis";
$centreInteret = ['VTT', 'Badminton', 'Tennis', 'Jeu vidéo', 'Airsoft', 'Modélisme'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test php</title>
</head>

<body>
    <h1>
        Bonjour, je suis <?php echo $nom . ' ' . $prenom . '.' ?>
    </h1>

    <h2>Mes centres d'intérêt sont :</h2>

    <ul>
        <?php for ($i = 0; $i < count($centreInteret); $i++) { ?>
            <li> <?php echo $centreInteret[$i]; ?> </li>
        <?php } ?>
    </ul>
</body>

</html>