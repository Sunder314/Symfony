# Crée un formulaire (Pour l'entité Product)
## Création d'un formulaire pour Product 
`php bin/console make:form`\
Rentrez les différents parametres demandés\
ici : nom : ProductType\
Chosisiez à quel entity apparatient le formulaire ici : Product\ 
## Création d'un controleur pour le formulaire
`php bin/console make:controller`\
Donnez lui un nom ici : ProductController\
## Modification du controller
Rendez vous dans le fichier Productcontroller (src/Controller/ProductController) qui viens d'être crée\
puis ajouter dans la class ProductController : \
`    #[Route('/product/add', name: 'app_add_product')]
    public function add(): Response
    {
        return $this->render('product/add.html.twig', [
            'controller_name' => 'AddProductController',
        ]);
    }`


