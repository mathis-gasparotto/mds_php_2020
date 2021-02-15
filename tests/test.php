<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test php</title>
</head>

<body>
    <h1>
        <?php echo "Coucou"; ?>
    </h1>
    <?php
    $numero = 1;
    $bool = true; // booléen : soit true soit false
    $float = 18.6;
    $monPrenom = "Mathis";
    // Utilisation de guillemets doubles : possibilité d'injecter la variable
    echo "Numéro : $numero<br/>";
    // Guillemet simples : la variable n'est pas interprétée
    echo 'Numéro : $numero<br/>';
    // Opérateur de concaténation
    echo 'Numéro : ' . $numero . '<br/>';

    const maConstante = 123;
    echo maConstante;

    //déclaration d'un tableau contenant 5 valeurs entières
    $monTableau = [1, 2, 3, 4, 5];
    $monAutreTableau = [6, true, $monPrenom];
    var_dump($monAutreTableau);
    echo $monAutreTableau[0];

    $utilisateur = [
        'login' => 'Mathis',
        'email' => 'test@test.com',
        'account_activated' => false
    ];
    var_dump($utilisateur);
    echo $utilisateur['email'];
    ?>
    <p>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo $i . "<br />";
        }
        ?>
    </p>
</body>

</html>