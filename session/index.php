<?php 
//Lorsqu'uen session n'est pas démarée et qu'on appelle session_start()
//PHP va chercher s'il existe un PHPSESSID, donc un identifiant de session, dans les cookies.
//S'il ne trouve pas d'identifiant, donc de PHPSESSID, alors il va en créer un, et le renvoyer au client dans un cookie.
//S'il trouve un identifaint de session, donc un cookie PHPSESSID, alors il va restituer le contexte de la session dans le tabelau $_SESSION
//Par défaut, le tableau $_SESSION sera vide
//Nous pourrons écrire des informations dans $_SESSION, contrairement 

session_start();
var_dump($_SESSION);
$_SESSION['cours_du_jour'] = "PHP";
var_dump($_SESSION);
?>

<?php 
require_once "layout/header.php";
require_once "data/users.php";
require_once "layout/connected.php"; 
?>

<form action="" method="post">
  <label for="login">Login : </label>
  <input type="text" name="login" value="" />

  <label for="password">Password : </label>
  <input type="password" name="password" value="" />
    
  <button type="submit">Se connecter</button>
</form>  

<?php require_once "layout/footer.php"; ?>

<!-- 
Retenir le nombre de pages visitées par l'utilisateur

Réaliser un petit mécanisme de connexion, à partir d'un formulaire (login / mot de passe) en méthode POST, qui viendra écrire en session que l'utilisateur est connecté si le login et le mot de passe correspondent respectivement à une certaine valeur. Dans votre layout, si l'utilisateur est connecté, ajoutez un élément visuel pour indiquer qu'il est bien connecté. Cet élément devra donc le suivre de page en page

Réaliser un sélecteur de thème CSS avec les sessions : sur toutes les pages, on aura une liste déroulante avec 2 thèmes possibles : "sombre" ou "clair". Suivant le thème choisi par l'utilisateur, il faudra adapter l'affichage du site pour appliquer le bon thème. Réalisez vos CSS en accord avec chaque apparence
-->