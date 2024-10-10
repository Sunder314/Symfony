# Changer le chemin des liens
allez de le fichier nav.html.twig (templates) \
et remplacé : `<a class="nav-link" href="#">Category</a>`\
par : `<a class="nav-link" href="/category">Category</a>`\
le href est la ou on va allez en cliquant le lien \
il faut mettre le nom de la route crée plus tot dedants pour y accéder

# Mettre l'utilisateur quand il est connecté
apprés la dernier balise ul\
`{% if not app.user %}`
`<a class="nav-link" href="/login">Login</a>`
`{% else %}`
`{{app.user.prenom}} &nbsp; <a href="{{ path('app_logout') }}">Logout</a>`
`{% endif %}`

