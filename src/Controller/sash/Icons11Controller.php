<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons11Controller extends AbstractController
{
    #[Route('sash/icons11', name: 'app_sash_icons11')]
    public function index(): Response
    {
        return $this->render('sash/icons11/index.html.twig', [
            'controller_name' => 'Icons11Controller',
        ]);
    }
}
