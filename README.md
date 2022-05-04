# Coopni

Dans un terminal, utiliser la commande ```composer install``` pour installer toute les dépendances nécessaire au lancement du projet

En cas de problème pour migrer les Entitées dans la base de donnée, supprimer tous les fichiers à coopni/migrations puis refaire une migration avec la commande 
```php bin/console make:migration``` puis ```php bin/console doctrine:migrations:migrate```



