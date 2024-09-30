# mettre un calendrier pour la date 
dans le fichier CataegoryType.php\
importer : `use Symfony\Component\Form\Extension\Core\Type\DateType;`\
et modifier le code pour coller ca : 
`->add('date_add', DateType::class, [
                'data' => new \DateTime(),
                'widget' => 'single_text'
            ]);`
