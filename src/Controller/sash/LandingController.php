<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    #[Route('sash/landing', name: 'app_sash_landing')]
    public function index(): Response
    {
        return $this->render('sash/landing/index.html.twig', [
            'controller_name' => 'LandingController',
        ]);
    }
}
