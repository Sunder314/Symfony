# Modifier la route pour le login 
## Dans le fichier LoginAuthentificatorAuthenticator.php
vous pouvez trouver le fichier dans src/security\
à la ligne 52 vous avez `return new RedirectResponse($this->urlGenerator->generate('app_home'));`\
remplacer `app_home` par le nom de la route que vous voulez
