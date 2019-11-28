# Utilisation du pattern

## Liste des étapes

- Récupération du repo et mise en place du projet
    - Premiere solution   
        - Cloner le repo du pattern `git clone...`.
        - Renommer le dossier avec le nom du projet souhaité `mv <anciennom> <nouveaunom>`
        - Se rendre dans le dossier nouvellement créé `cd <nouveaunom>`
        - Supprimer le dossier `.git` afin de ne pas écraser le repo pattern d'origine et de ne pas garder l'historique du pattern dans notre nouveau projet. `sudo rm -R .git`
        - Initialise `git` dans le dossier du projet `git init`
    - Deuxième solution
        - Cloner le repo du pattern `git clone...`.
        - Créer un nouveau dossier pour notre projet
        - Prendre tout ce qui se trouve dans le dossier cloné et le dupliquer dans le nouveau dossier du projet.
    

- Installation de nos dépendances avec composer `composer install`
- Création de la BDD
- Création du fichier `wp-config.php` à partir du fichier `wp-config-sample.php`
    - Renseigner les informations de connexion à la BDD
    - Renseigner les clés de salage [URL pratique](https://api.wordpress.org/secret-key/1.1/salt/)
    - Renseigner la constante `WP_CONTENT_URL` avec notre url locale
- Changer les droits des fichiers/dossier de mon projet
```bash
sudo chown -R <user>:www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
sudo chmod 644 .htaccess
```
- Se rendre sur l'url locale de notre projet pour terminer l'installation de WordPress
- Penser à changer l'url de la home de notre projet _(Admin BO / Réglages / Général / Adresse web du site (URL))_