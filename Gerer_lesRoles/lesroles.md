# Gerer les roles 
`is_granted` verifier le role (comme un si)
## Hierachie des roles
dans le fichier security.yaml (packages\security.yaml)\
rajouter `role_hierarchy : 
        ROLE_ADMIN : [ROLE_EMPLOYEE]
        ROLE_EMPLOYEE : [ROLE_USER]`\
cela fait en sorte que la l'admin a les droit du Role_employee et par hierachie ceux du User \
et le role employe ceux du User\
mais le User n'as pas les droit ni du employe ni du Admin\
## Gerer l'accés aux pages 
dans access_controle \
rajouter : `    access_control:
        - { path: ^/admin, roles: ROLE_ADMIN }
        - { path: ^/profile, roles: ROLE_USER }
        - { path: ^/product, roles: ROLE_EMPLOYEE }
        - { path: ^/category, roles: ROLE_EMPLOYEE } `\
  ## Gerer la nav bar
  allez dans le fichier nav.html.twig\
  rajouter : `{% if is_granted('ROLE_EMPLOYEE') %}`avant l'item que vous voulez masquer \
  et `{% endif %}` aprés 
