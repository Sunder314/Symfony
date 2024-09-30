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
Copié coller ce code dans la page et modifé les parmétre pour qu'il soit adapté a la l'entity du formulaire\
Pour en savoir plus sur les commandes utilisées renseignez vous
Exemple : j'ai crée un nouveaux formulaire pour l'entity Category\
J'ai suivis le inscrustion puis j'ai modifié le code du Controller crée plus tot comme suivant\
<?php

`namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryControllerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;`

`class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/category/add', name: 'app_add_category')]
    public function addCategory(Request $request, EntityManagerInterface $em): Response
    {
        // Charger le formulaire
        $category = new Category();
        $form = $this->createForm(CategoryControllerType::class,$category);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('app_category');
        }


        return $this->render('category/add.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}`\
Analyser les différence pour bien comprendre comment crée un formulaire et aider vos des erreurs pour comprendre où ca bloque



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
## Ajouter un button submit 
A la suite des add->...\
ajouter : `->add('save', SubmitType::class);`
