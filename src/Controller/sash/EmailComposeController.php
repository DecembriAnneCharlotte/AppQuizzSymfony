<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailComposeController extends AbstractController
{
    #[Route('sash/email-compose', name: 'app_sash_email_compose')]
    public function index(): Response
    {
        return $this->render('sash/email_compose/index.html.twig', [
            'controller_name' => 'EmailComposeController',
        ]);
    }
}
