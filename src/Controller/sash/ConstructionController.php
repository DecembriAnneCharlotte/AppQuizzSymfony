<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConstructionController extends AbstractController
{
    #[Route('sash/construction', name: 'app_sash_construction')]
    public function index(): Response
    {
        return $this->render('sash/construction/index.html.twig', [
            'controller_name' => 'ConstructionController',
        ]);
    }
}
