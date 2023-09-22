<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapsController extends AbstractController
{
    #[Route('sash/maps', name: 'app_sash_maps')]
    public function index(): Response
    {
        return $this->render('sash/maps/index.html.twig', [
            'controller_name' => 'MapsController',
        ]);
    }
}
