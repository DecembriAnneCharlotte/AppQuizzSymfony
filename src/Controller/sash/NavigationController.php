<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    #[Route('sash/navigation', name: 'app_sash_navigation')]
    public function index(): Response
    {
        return $this->render('sash/navigation/index.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
}
