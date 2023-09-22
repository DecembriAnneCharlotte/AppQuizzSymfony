<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TermsController extends AbstractController
{
    #[Route('sash/terms', name: 'app_sash_terms')]
    public function index(): Response
    {
        return $this->render('sash/terms/index.html.twig', [
            'controller_name' => 'TermsController',
        ]);
    }
}
