## Cree un table User dans la base de donnée 
`php bin/console make:user`\
Tapper entrer pour garder le nom User\
ENSUITE METTEZ OUI c'est pour stocker les donnée dans la base de donnée crée plus tôt\
Ensuite vous choisisez vos paraméte d'indentification\
ici email \
puis si vous hacher le mdp (le cripter)\

## Bonus crée une entité 
` php bin/console make:entity`\
puis rentrer le nom de l'entité et les attributs voulu\
enpuyer sur entrer quand on demande si vous coulez ajouter un attriubut pour arreter le script\
Esuite aller voir le fichier crée et regarder les functions associées\
ensuite\
si une migration a déjà etait faite : \
`php bin/console doctrine:migrations:migrate`\
sinon \
`php bin/console make:migration`\
`php bin/console doctrine:migrations:migrate`
racourcis clavier \
`php bin/console d:m:m`

## modifier l'entiter User 
`php bin/console make:entity`
Si vous rentrez une entite deja connu vous pourrais alors l'éditer donc ici On rentre User\
rentrer les atribut voulu ainsi que leur type ect pour arreter l'edition tapper entre sans rien marquer

## crée la migration 
`php bin/console make:migration`\
puis effectuer la migration \
`php bin/console doctrine:migrations:migrate`\
tapper yes\
Aller dans votre table sur PHPMyAdmin et verfifier la création de la table User et deux autre table qui servent à journaliser les migrations\

