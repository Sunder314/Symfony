# Intialiser son Mailer DNS
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
puis ajouter un return si vous voulez pour confimer l'envoie du mail\

## Erreur 
si le mail ne s'envoie pas et qu'il n'y a pas d'erreur manifeste\
aller dans config/packages/messenger.yaml et mettez en commentaire : \
` Symfony\Component\Mailer\Messenger\SendEmailMessage: async`

# Envoie d'un mail avec composer 
dans le terminal `comoser require phpmailer/phpmailer`\
ensuite dans src crée un dossier ou vous crée un fichier PHPMailService.php \
dans le fichier : 
`<?php
namespace App\Service;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
class PHPMailerService extends PHPMailer
{
public function __construct() {
// configuration du mailer
$this->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$this->isSMTP();                                            //Send using SMTP
$this->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$this->SMTPAuth   = true;                                   //Enable SMTP authentication
$this->Username   = 'yourmail@gmail.com';                     //SMTP username
$this->Password   = 'password';                               //SMTP password
$this->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$this->Port       = 465; }
}`
## Envoie d'un mail 
dans le homController : \
`use App\Service\PHPMailerService;`\

puis crée une route et intialiser le mail (https://github.com/PHPMailer/PHPMailer) \
`#[Route('/mail', name: 'app_mail')]
public function mail(PHPMailerService $mail): Response
{
$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('exemple@gmail.com', 'Joe User');
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();
return $this->render('home/email.html.twig', [
'controller_name' => 'envoie reussi',
]);
}`





















