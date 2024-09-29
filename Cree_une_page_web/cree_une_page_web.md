# Creer une page web 
## Création d'un controlleur 
`php bin/console make:controlleur`\
Donner le nom voulu au controlleur ici : HomeControlleur\
Pour voir si le controller marche rendez vous sur le dossier Controller et verfier si un fichier a été crée

## liste des route active 
`php bin/console debug:router`

## pour changer la route d'une page 
rendez vous dans le fichier crée aprés la création du controller\
dans la fonction `#[Route('/nomdelarout', name: 'app_home')]`\
modifier nomdelaroute par le nomvoulu par exemple '/' alors acun mot ne sera placée apres le slash (home page)

## Pour crée une nouvelle route 
il vous suffit de copier coller le code la premiére route et de remplacer tout les elements voulu ainqi que de crée unr nouvelle page html qui est reféricié dans la nouvelle route\
vous mettrez le code html dessus voulu \
ex : `#[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'Controller de page contact',
        ]);
    }`\
ici le /contact dans la barre de recherche renvoie a ce controller qui renvoie a la page home/contact.html.twig






