# micro-virtualhosts
Small php project for web dynamic module

# Howto

- [x] Installer [XAMPP](https://www.apachefriends.org/fr/index.html). (serveur Web et SQL)
- [x] Copier le projet dans le dossier htdocs se situant a la racine du dossier de XAMPP.
- [x] Créer la base de donnée : aller sur [phpmyadmin](http://127.0.0.1/phpmyadmin/server_import.php?db=) puis importer le fichier /app/database/virtualhosts.sql .
- [x] Se rendre a l'adresse du [projet](http://127.0.0.1/micro-virtualhosts/)

Les TODO 1, 2 et 4 ont été réalisé sur ce projet.

# Fonctionnalités

    - Accès aux TODO 1 et 2 sécurisé : si l'utilisateur n'est pas connecté, n'affiche pas la page et invite a se connecter.
    - Possibilité de voir le serveurs dédié et les hotes virtuels de l'utilisateur connecté 
    - Affichage en fonction du type de serveur (Apache, Nginx..)
   
Nous avons utilisé Twig et Semantic-UI pour l'affichage.


# Répartition des TODO : 

TODO 1 : fait par Simon Besnard et aidé par Edouard Ducrocq

[Visualiser le TODO 1](http://127.0.0.1/micro-virtualhosts/my)


TODO 2 et 4 : fait par Edouard Ducrocq

[Visualiser le TODO 2](http://127.0.0.1/micro-virtualhosts/display/host/1)



