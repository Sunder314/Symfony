# Image dans le formulaire 
dans le fichier CategoryType\
modifier le code et coller ça : \
            `->add('image', FileType::class,[
                'required' => false,
                'mapped' => false,
                'label' => 'Image Category',
                'attr' => [
                    'placeholder' => 'Placeholder Image Category'

                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png'
                            ],
                        'mimeTypesMessage' => 'Merci de saisir un fichier valide (jpeg ou png)',
                        'uploadFormSizeErrorMessage' => 'la taille du fichier doit être en dessous de 2024k'
                    ])
                ]`
## Dans le fichier CategoryController
dans : `if ($form->isSubmitted() && $form->isValid())`\
ajouter : `$file = $form['image']->getData();
            if ($file) {
                $originalName = pathinfo($file->getClientOriginalname(),PATHINFO_FILENAME);
                $newName = $originalName . '-' . uniqid() . '-' . $file->guessExtension();
                $category->setImage($newName);
                try{
                    $file->move($path,$newName);
                } catch (FileExeption $e) {
                    echo $e->getMessage();
                }
            }`\

## Dans le fichier service.yaml
(config/)
dans parametre ajouter : 
`parameters:
    app.dir.public: '%kernel.project_dir%/public/'`
## Dans le fichier CategoryController
juste au dessus du : `if ($form->isSubmitted() && $form->isValid())`\
ajouter : \
`$path = $this->getParameter('app.dir.public').'uploads/';`
      
