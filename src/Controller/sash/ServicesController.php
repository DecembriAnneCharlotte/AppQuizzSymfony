<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('sash/services', name: 'app_sash_services')]
    public function index(): Response
    {
        return $this->render('sash/services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }
}
