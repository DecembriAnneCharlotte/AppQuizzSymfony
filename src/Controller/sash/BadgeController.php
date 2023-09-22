<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BadgeController extends AbstractController
{
    #[Route('sash/badge', name: 'app_sash_badge')]
    public function index(): Response
    {
        return $this->render('sash/badge/index.html.twig', [
            'controller_name' => 'BadgeController',
        ]);
    }
}
