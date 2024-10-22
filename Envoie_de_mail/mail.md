# intialiser son Mailer DNS
sur votre compte google crée un mot de passe d'application (il faut que votre compte est l'authentification à deux facteurs)\
ensuite dans le fichier `.env` sur votre symofony \
`MAILER_DSN=smtp://your-email@gmail.com:your-password@smtp.gmail.com:587`\
remplacer `your-email` par votre email et `your password` par le mot de passe d'aplication crée\

## Envoie d'un mail
dans le homeController (src/controller)\
crée un nouvelle route ici `/mail` et `app_mail`\
`public function mail(MailerInterface $mailer): Response {`
`// envoie du mail
$email = new Email();
$email->from('symfony6@gmail.com')
->to('gasparsundermann62@gmail.com')
->subject('Test')
->text('Email')
->html('<h2>Texte email</h2>');
$mailer->send($email);`

