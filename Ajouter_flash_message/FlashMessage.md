# Ajouter des message flash 
dans votre fichier base.html.twig\
Ajouter dans la div class="container" : \            
`{% for message in app.flashes('success')%}
            <div class="alert alert-success">
                {{ message | raw }}
            </div>
            {% endfor %}`
puis dans vos les fichier ou vous voulez ajouter un message flash \
ici dans les fichier ProductController et CategoryController\
dans le chemin /new j'ai ajouté a la suite de : \
        `if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();`\
j'ai ajouté : \
`            // ajout de flash message 
            $this->addFlash('success','Category add');`
