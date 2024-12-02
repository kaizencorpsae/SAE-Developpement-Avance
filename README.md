# LetMeCook
### Un projet de KaizenCorp

## Notre équipe

Nathan Boulangeot, Alexandre Meunier, Mehdi Debbali, Jawed Bensaih et Aminata Thioune forment le groupe KaizenCorp.

L’équipe se complète beaucoup. En effet, elle est assez souple et peut relever des défis complexes avec certains membres plus efficaces sur le back-end et d’autres sur la finition avec le côté créativité et front-end.


### Nous utilisons Laravel

Laravel est un framework d'application Web avec une syntaxe expressive et dite élégante.
Laravel simplifie les tâches courantes. C'est un outil puissant, favorisant une application large et robuste.

### Mise en place

Pour mettre en place le projet en local, vous aurez besoin de **PHP**, et de **MySQL**.  

#### MySQL
Pour mysql, vous aurez besoin de créer une base de données et d'exécuter les scripts se trouvant sur le Google docs.
Les scripts SQL sont séparés en deux : création des tables, et peuplement.
Le nom, utilisateur et mot de passe de cette base de données devront être écrits dans le fichier `.env` (lignes 27-29), voici un exemple :  
```
DB_DATABASE=db
DB_USERNAME=Nath
DB_PASSWORD=admin
```

## Executer le projet avec php
Pour exécuter le projet, il suffit d'exécuter la commande `php artisan serve`.  
Enfin, on peut se connecter en localhost, port 8000 (ou le port spécifié dans `.env` si changé).

### License

MIT
