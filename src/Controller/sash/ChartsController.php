<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartsController extends AbstractController
{
    #[Route('sash/charts', name: 'app_sash_charts')]
    public function index(): Response
    {
        return $this->render('sash/charts/index.html.twig', [
            'controller_name' => 'ChartsController',
        ]);
    }
}
