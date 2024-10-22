<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'Controller de page contact',
        ]);
    }

    #[Route('/mail', name: 'app_mail')]
    public function mail(MailerInterface $mailer): Response
    {
        // envoie du mail
        $email = new Email();
        $email->from('symfony6@gmail.com')
            ->to('gasparsundermann62@gmail.com')
            ->subject('Test')
            ->text('Email')
            ->html('<h2>Texte email</h2>');
        $mailer->send($email);

    
        return $this->render('home/email.html.twig', [
            'controller_name' => 'envoie reussi',
        ]);
    }

    #[Route('/loggedout', name: 'app_loggedout')]
    public function logout(): Response
    {
        return $this->render('security/logout.html.twig', [
            'controller_name' => 'Controller de page contact',
        ]);
    }

}
