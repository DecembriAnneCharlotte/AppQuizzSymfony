<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoadersController extends AbstractController
{
    #[Route('sash/loaders', name: 'app_sash_loaders')]
    public function index(): Response
    {
        return $this->render('sash/loaders/index.html.twig', [
            'controller_name' => 'LoadersController',
        ]);
    }
}
