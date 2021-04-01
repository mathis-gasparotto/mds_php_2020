# My Digital School - B1 - PHP - Partiel

> Vous devrez envoyer votre rendu, c'est-à-dire une archive ZIP contenant l'ensemble des sources, images et CSS, avant le vendredi 02/04/2021 à 12:00 (midi)

## Sujet

Vous allez réaliser une application présentant des albums de musique. Les utilisateurs de votre application pourront ajouter un ou plusieurs albums à un panier, pour les commander.

> Votre application s'appuiera sur une base de données MySQL pour la gestion des albums

## Pages attendues

Partie "publique" du site, accessible à tous les utilisateurs :

- Page d'accueil (liste des albums)
- Fiche album
- Voir le panier
- Login

Partie "privée", administration, accessible seulement aux utilisateurs authentifiés :

- Liste des albums enregistrés
- Nouvel album
- Editer un album
- Supprimer un album
- Déconnexion

## Base de données

Votre base de données contiendra 2 tables : `users` et `albums`.

### Structure des tables

#### **users**

| Nom de la colonne | Type    | Commentaire                           |
| ----------------- | ------- | ------------------------------------- |
| id                | INT     | NOT NULL, AUTO_INCREMENT, PRIMARY KEY |
| login             | VARCHAR | Taille 255                            |
| pass              | VARCHAR | Taille 255                            |

> Vous pouvez ajouter un utilisateur directement depuis PhpMyAdmin avec la fonctionnalité "Insérer" quand vous êtes positionnés dans la table `users`

#### **albums**

| Nom de la colonne | Type    | Commentaire                           |
| ----------------- | ------- | ------------------------------------- |
| id                | INT     | NOT NULL, AUTO_INCREMENT, PRIMARY KEY |
| artist            | VARCHAR | Taille 255                            |
| title             | VARCHAR | Taille 255                            |
| cover             | VARCHAR | Taille 255                            |

> Le champ `cover` de la table `albums` contiendra un lien vers une image, sur internet ([Unsplash](https://source.unsplash.com) par exemple)

## Apparence

Votre application présentera un menu, une zone de contenu et un footer.

Dans le menu, on fera apparaître de manière conditionnelle le(s) lien(s) d'administration, selon que l'on est connecté ou non.

Vous êtes complètement libre sur l'apparence de l'application. Si vous le souhaitez, vous pouvez utiliser une librairie externe comme Bootstrap.
