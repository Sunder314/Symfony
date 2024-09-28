#Crée une base de donnée 
## penser a ouvir votre fentre localhost/phpMyAdmin pour voir les créeations de BDD
## Avant toute création de BDD
Allez sur votre fichier .env dans le dossier symfony\
et modifier la ligne `DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"`\
par : `DATABASE_URL="mysql://username:password@127.0.0.1:3306/database_name"`\
remplacez `username` `password` et `database_name` par vos informations.

## Crée une base de données 
sur un terminal prompt dans un projet symfony deja crée et ouvrer un terminal comande prompt\
Tapper `php bin/console doctrine:database:create`\ 
Aller verfier que la table se soit bien crée sur php MyAdmin


