# Creer un projet symfony sur vs Code
## Assurer vous de bien avoir installer composer avant.
dans le dossier root de laragon ouvrer un terminal powershell et tapper `composer create-project symfony/skeleton:"6.3.*@dev" nom du dossier`\
## Ajout de fichiers additionels
placer dasn le dossier crée `cd nom du dossier`\
et tapper dans le terminal `composer require webapp`\
repondez non (n) a la question (installation de docker) 
## Ajout de la recette htacces qui permet d'avoir une url ecrite
`composer require symfony/apache-pack`\
repondez oui à la question 
## rendre le site actif 
si vous chercher le site normalement il sera afficher seulement l'index, on le rendre actif grace à htacces\
aller sur largon et appuyer sur stop puis start all\
ensuite click droit sur web -> Apache -> sites-enabled -> auto.nomdudossier.test.conf\
Une fois le fichier de configuration ouvert : rajouter public A chaque fin de chemin `("C:/laragon/www/nomdudossier/public")`\
retourner su largon et appuyez sur reload puis rechargez votre page web et si un site symfony apparait alors tout est bon 

