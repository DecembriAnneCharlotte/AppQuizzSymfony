<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FootersController extends AbstractController
{
    #[Route('sash/footers', name: 'app_sash_footers')]
    public function index(): Response
    {
        return $this->render('sash/footers/index.html.twig', [
            'controller_name' => 'FootersController',
        ]);
    }
}
