# LetMeCook
### Un projet de KaizenCorp

## Notre équipe

Nathan Boulangeot, Alexandre Meunier, Mehdi Debbali, Jawed Bensaih et Aminata Thioune forment le groupe KaizenCorp.

L’équipe se complète beaucoup. En effet, elle est assez souple et peut relever des défis complexes avec certains membres plus efficaces sur le back-end et d’autres sur la finition avec le côté créativité et front-end.


### Nous utilisons Laravel

Laravel est un framework d'application Web avec une syntaxe expressive et dite élégante.
Laravel simplifie les tâches courantes. C'est un outil puissant, favorisant une application large et robuste.

### Mise en place

Pour mettre en place le projet en local, vous aurez besoin de **PHP composer**, et de **MySQL**. 

Note : Toutes les commandes devront être exécutées à la racine du projet Laravel.

#### MySQL
Pour mysql, vous aurez besoin de créer une base de données. 
Pour connecter votre BDD à Laravel, vous devrez copier-coller le fichier `.env.example` et le renommer en `.env` à la racine du projet Laravel.

Dans ce fichier `.env`, ajoutez le nom, l'utilisateur et le mot de passe (lignes 27-29), voici un exemple :  
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=user
DB_PASSWORD=1234
```
Ensuite, pour créer les tables et avoir les données par défault, exécutez la commande `php artisan migrate:fresh --seed` 

Enfin, exécutez la commande suivante : `composer install`.
Cela installera toutes les dépendances que Laravel aura besoin.

## Executer le projet avec php
Pour exécuter le projet de Laravel, exécutez la commande `php artisan serve`.  
Vous pouvez ensuite vous connecter en [localhost](http://127.0.0.1:8000/).

### Erreurs possibles

Quelques erreurs sont possibles après le lancement du serveur Laravel, vous en avez quelque unes expliquées
- Si vous avez l'erreur de Laravel `No application encryption key has been specified.`, exécutez la commande `php artisan key:generate` et relancez le serveur Laravel
- Si vous avez une erreur en rapport avec bootstrap, écrivez dans le fichier `app/Providers/AppServiceProvider.php`, dans la fonction `boot()` :
```php
public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
```
- Si vous avez une erreur en rapport avec la BDD, exécutez la commande `php artisan migrate:fresh --seed`

Vous avez la possibilité de parcours la [documentation Laravel](https://laravel.com/docs/11.x) pour comprendre son fonctionnement

### License

MIT
