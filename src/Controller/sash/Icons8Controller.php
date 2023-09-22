<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons8Controller extends AbstractController
{
    #[Route('sash/icons8', name: 'app_sash_icons8')]
    public function index(): Response
    {
        return $this->render('sash/icons8/index.html.twig', [
            'controller_name' => 'Icons8Controller',
        ]);
    }
}
