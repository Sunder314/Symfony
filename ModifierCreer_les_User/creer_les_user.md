# Modifier le fomrulaire
Aprés avoir crée une table User puis avoir utilisé CRUD (voir CRUD/crud.md) sur cette table\
Allez dans le fichier UserType.php (src/form/userTyper.php) et modifier le fichier : 
`->add('roles',ChoiceType::class,[`\
                `'choices' => [`
                    `'Client' => 'ROLE_USER',
                    'Employee' => 'ROLE_EMPLOYEE',
                    'Admin'=> 'ROLE_ADMIN',`
                `],`\
                `'help' => 'selectionner un role',
                'multiple'=> false,
                'mapped' => false,`
            `])`\
allez dans le UserController (src/Controller/UserController.php)\
Analyser le fichier\
puis aller dans la route **\new**\
dans puiblic fonction .. rajouter dans la parentèse `UserPasswordHasherInterface $passwordHasher`\
ensuite apres le if : \ 
rajouter : `$encoded = $passwordHasher->hashPassword($user,$form->get('password')->getData());`\
            `$tabrole = [$form->get('roles')->getData()];`\
            `$user->setRoles($tabrole)->setEmail($form->get('email')->getData())->setNom($form->get('nom')->getData());`\
            `$user->setPrenom($form->get('prenom')->getData())->setPassword($encoded);`
