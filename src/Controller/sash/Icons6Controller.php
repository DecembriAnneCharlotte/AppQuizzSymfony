<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons6Controller extends AbstractController
{
    #[Route('sash/icons6', name: 'app_sash_icons6')]
    public function index(): Response
    {
        return $this->render('sash/icons6/index.html.twig', [
            'controller_name' => 'Icons6Controller',
        ]);
    }
}
