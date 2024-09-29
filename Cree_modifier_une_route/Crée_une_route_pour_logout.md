# Crée un route pour logout 
## Dans le HommeControler crée une nouvelle route
ici j'ai ajouté :\
` #[Route('/loggedout', name: 'app_loggedout')]
    public function logout(): Response
    {
        return $this->render('security/logout.html.twig', [
            'controller_name' => 'Controller de page contact',
        ]);
    }`\
  a la suite des autres routes\
  ##Modifier le fichier security.yaml
  Ensuite rendez-vous dans le fichier security.yaml (Config/package/security.yaml)\
  et modifier la ligne : `# target: any_direction`\
  par : `target: app_loggedout`
  
  
