Application "empreintesduweb"
===================

 *  Auteur : Jules
 *  Support : jules.xenone@gmail.com

Objectif : Réaliser une API qui récupère le code source d'une page, l'enregistre localement, lit seulement une partie de ce code puis le supprime à la fermeture du navigateur de l'utilisateur. 

Méthode de réalisation : PHP

Avancement :
 * Définition de l'id de la page
 * Création de l'url dans une variable temporaire : $url = $base.$id.$fin;
 * Exploration de la page en question
    * Si la page existe (un utilisateur est déjà entrain de la regarder), alors on ne fait que l'ouvrir
    * Si la page n'existe pas, alors on créer la page et y insère tout ce dont nous avons besoin
 * On vérifie que la page ne renvoi pas à une erreur
    * Si aucun code ne correspond à cette page, on affiche un message d'erreur + on arrête le script en cours (return;)
    * Si un code correspond, on continu tranquilement le code

Reste à faire :
 * Partie d'affichage du code : on affiche seulement la partie entre "<x>" et "<y>"
 * Partie d'effacement du code : on supprime la page ($page = ''.$id.'.html';), en utilisant la fonction javascript  "window.onbeforeunload = temporaire_file_close;"

Utiliser cette API
===================

Pour utiliser l'application développé, vous ne devez pas simplement importer la page '.php', vous devez l'inclure quelque part.
En effet, pour plus de sécurité j'ai fait en sorte que la page ne sois pas visible directement (en accès direct, quoi...).

Allez sur la page que vous voulez (de préférence, celle où vous voulez afficher cette application) et insérez dans cette page (où vous voulez) le code suivant :
```PHP
<?php $on_api = TRUE;
require_once('chemin vers le fichier/empreintes_du_web.php'); ?>
```
Ensuite, dans le fichier "**empreintes_du_web.php**", vous devez seulement modifier la variable suivante :
```PHP
$file_dir = "./temporaire_file_checking/";
```
Remplacez le contenu de la variable par le chemin d'enregistrement temporaire des fichiers récupérés. 
**Si vous utilisez le système par défaut, ne changez rien.**
