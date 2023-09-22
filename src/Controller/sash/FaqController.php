<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends AbstractController
{
    #[Route('sash/faq', name: 'app_sash_faq')]
    public function index(): Response
    {
        return $this->render('sash/faq/index.html.twig', [
            'controller_name' => 'FaqController',
        ]);
    }
}
