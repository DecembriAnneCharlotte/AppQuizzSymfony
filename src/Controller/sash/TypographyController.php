<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypographyController extends AbstractController
{
    #[Route('sash/typography', name: 'app_sash_typography')]
    public function index(): Response
    {
        return $this->render('sash/typography/index.html.twig', [
            'controller_name' => 'TypographyController',
        ]);
    }
}
