# Installation Windows Projet Laravel
Tutoriel pour l'installation du projet Laravel d'interface ParseWaves.
**Lien du GitHub** : https://github.com/LeoMafille/test_parsewaves
## Outils à installer
**Laravel Herd** : Outil officiel de Laravel qui permet de lancer d'héberger en local des applications Laravel, sous Windows ou macOS.
https://herd.laravel.com/
**Git** : Outil de *versioning*.
## Installation du projet
1. Installer Laravel Herd en suivant le guide d'installation.
2. Par défaut, Laravel Herd créé un dossier localisé dans %USER% (chemin d'accès : `C:/Users/%USER%/Herd`). Ce dossier servira de source dans lequel Herd va vérifier quels projets sont installés.
3. Faire un clone du projet dans le dossier source de Herd. **Attention !** La racine du projet (ici, dossier test_parsewaves) doit absolument être directement enfante du dossier source de Herd. 
Exemple d'arborescence valide : `C:/Users/%USER%/Herd/test_parsewaves/`.
Exemple d'arborescence invalide : `C:/Users/%USER%/Herd/dossier/test_parsewaves/`
**Toutes les commandes suivantes (sauf quand indiqué) sont à exécuter dans un terminal situé dans le dossier du projet.**
4. `composer install`. Installation des dépendances PHP du projet.
5. `npm install`. Installation des dépendances JavaScript du projet.
- Une erreur peut avoir lieu ici. Si c'est le cas, exécuter la commande suivante dans un terminal PowerShell de Windows, lancé en tant qu'administrateur : `Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned`.
6. `npm run build`. Compilation des assets JavaScript et CSS.
7. `php artisan key:generate`. Génération d'une clé de cryptage. 
8. S'il n'existe pas déjà, créer un fichier `database.sqlite` vide dans le dossier `database/`.
9. `php artisan migrate:fresh --seed`. 
- migrate - Indique à Laravel de lancer les fichiers d'initialisation (migrations) de la base de données.
- :fresh - Indique à Laravel de relancer tous les fichiers de migrations, pas que les fichiers créés depuis la dernière fois qu'une commande migrate a été lancée.
- --seed - Lance le fichier `database/seeders/DatabaseSeeder.php`, qui créé des données de test.
10. Ouvrir l'URL `test_parsewaves.test` sur un navigateur. Cette URL est hébergée en local, il n'y a donc aucun risque.
