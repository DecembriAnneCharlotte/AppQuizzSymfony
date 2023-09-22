<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmailReadController extends AbstractController
{
    #[Route('sash/email-read', name: 'app_sash_email_read')]
    public function index(): Response
    {
        return $this->render('sash/email_read/index.html.twig', [
            'controller_name' => 'EmailReadController',
        ]);
    }
}
