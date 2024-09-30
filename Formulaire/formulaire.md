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

`namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);`
    }

    #[Route('/product/add', name: 'app_add_product')]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        // Charger le formulaire
        $product = new Product();
        $form = $this->createForm(ProductType::class,$product);


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('app_product');
        }


        return $this->render('product/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}`
Copié coller ce code dans la page\
Pour en savoir plus sur les commandes utilisées renseignez vous
## Ajouter une categorie 
Aller sur phpMyAdmin et ajouter une catégorie a la main 
## Amélioré le formulaire
Retourner sur le fichier ProductType et tapper : \
`            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'id',
                'choice_label' => 'name',
                'placeholder' => 'choisir une categorie',
                'label' => 'Catégorie'

            ])
        ;`\
    A la place de ->add('category');

