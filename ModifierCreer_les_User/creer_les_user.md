# Creer un User 
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

