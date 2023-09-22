<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons3Controller extends AbstractController
{
    #[Route('sash/icons3', name: 'app_sash_icons3')]
    public function index(): Response
    {
        return $this->render('sash/icons3/index.html.twig', [
            'controller_name' => 'Icons3Controller',
        ]);
    }
}
