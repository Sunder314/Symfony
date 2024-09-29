# Defaire une migration
## pour voir tout ce qui estpossible avec migrations
`php bin/console doctrine:migrations` puis entrer
## pour voir la liste des migration effectué
`php bin/console doctrine:migrations:list` puis copier la version voulu (ex : DoctrineMigrations\Version40987302)\
## pour revenir à la migration voulu 
`php bin/console doctrine:migrations:migrate collerlaVersionCopié`
