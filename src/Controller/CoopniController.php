<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoopniController extends AbstractController
{
    #[Route('/coopni', name: 'app_coopni')]
    public function index(): Response
    {
        return $this->render('coopni/index.html.twig', [
            'controller_name' => 'CoopniController',
        ]);
    }

    #[Route('/coopni.com', name: 'home')]
    public function home(): Response
    {
        return $this->render('coopni/home.html.twig');
    }

    #[Route('/coopni.com/actualité', name: 'news')]
    public function actualités(): Response
    {
        return $this->render('coopni/news.html.twig');
    }

    #[Route('/coopni.com/actualité/article', name: 'article')]
    public function article(): Response
    {
        return $this->render('coopni/article.html.twig');
    }

    #[Route('/coopni.com/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('coopni/contact.html.twig');
    }

    #[Route('/coopni.com/achat', name: 'purchase')]
    public function purchase(): Response
    {
        return $this->render('coopni/purchase.html.twig');
    }

    #[Route('/coopni.com/achat/paiement', name: 'payment')]
    public function payment(): Response
    {
        return $this->render('coopni/payment.html.twig');
    }

    #[Route('/coopni.com/connexion-inscription', name: 'login-registration')]
    public function loginRegistration(): Response
    {
        return $this->render('coopni/login-registration.html.twig');
    }

    #[Route('/coopni.com/connexion-inscription/inscription', name: 'registration')]
    public function registration(): Response
    {
        return $this->render('coopni/registration.html.twig');
    }

    #[Route('/coopni.com/connexion-inscription/connexion', name: 'login')]
    public function login(): Response
    {
        return $this->render('coopni/login.html.twig');
    }

    #[Route('/coopni.com/mention-légale', name: 'legal-notice')]
    public function legalNotice(): Response
    {
        return $this->render('coopni/legal-notice.html.twig');
    }

    #[Route('/coopni.com/mot-de-passe-oublié', name: 'forgotten-password')]
    public function forgottenPassword(): Response
    {
        return $this->render('coopni/forgotten-password.html.twig');
    }

    #[Route('/coopni.com/suivie-de-commande', name: 'order-tracking')]
    public function orderTracking(): Response
    {
        return $this->render('coopni/order-tracking.html.twig');
    }
}
