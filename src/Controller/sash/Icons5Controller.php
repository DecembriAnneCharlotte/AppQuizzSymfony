<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons5Controller extends AbstractController
{
    #[Route('sash/icons5', name: 'app_sash_icons5')]
    public function index(): Response
    {
        return $this->render('sash/icons5/index.html.twig', [
            'controller_name' => 'Icons5Controller',
        ]);
    }
}
