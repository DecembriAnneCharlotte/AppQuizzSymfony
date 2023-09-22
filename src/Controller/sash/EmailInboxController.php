<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailInboxController extends AbstractController
{
    #[Route('sash/email-inbox', name: 'app_sash_email_inbox')]
    public function index(): Response
    {
        return $this->render('sash/email_inbox/index.html.twig', [
            'controller_name' => 'EmailInboxController',
        ]);
    }
}
