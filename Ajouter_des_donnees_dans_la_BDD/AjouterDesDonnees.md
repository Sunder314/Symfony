# Ajouter des données grâce à une table Fixture
## Charger les fictures 
`composer require --dev orm-fixtures`\
## Exploter la table Fixture 
Regarder les modifaction et suivez les instruction pour modifier les différente fonction voulu\
Ensuite aller dans le fichier src/DataFixture/AppFixtures\
et crée un nouveaux User (ex $user = new User()) Si une erreur apparait c'est que vous n'avez pas importer la class\
ici il mettre `use App\Entity\Nomdelaclass` aprés `namespace App\...`\
ensuite definissez le user avec les différente fonctions présentes dasn sont code\
ici `$user->setNom('Joffry')->setPrenom('Mbappe')->setEmail('kylianballondor@gmail.com)`
## Hacher le password
Ajouter a la suite de tout les `use App\..` `use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;`\
ajouter au dessus le fonction load mais dans la class\
une variable protected (ici : `protected $ebcoder;`)\
ensuite crée un constructeur juste en dessous de la maniére suivante : \
`public function __construct(UserPasswordHasherInterface $encoder) {`\
`$this->encoder = $encoder;}`
## Definir le Userpassword
A la suite de la definition des user dasn la fonction load (`$user->setNom('Joffry')->setPrenom('Mbappe')->setEmail('kylianballondor@gmail.com)`)\
tapper `$encoded = $this->encoder->hashPassword();`\
`$user->setPassword($encoded);`\
## finir de definir les fonction du User
finissez de definir les fonction s a la suite du code\
ici `user->setRoles(['ROLE_USER']);`
## Inserer les données dans la BDD
dans le terminal : \
`php bin/console doctrine:fixtures:load`\
Un message va s'afficher disant que les données vont être suppr si vous êtes sur mettez yes\
Et voila.






