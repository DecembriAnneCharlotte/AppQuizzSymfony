<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartController extends AbstractController
{
    #[Route('sash/chart', name: 'app_sash_chart')]
    public function index(): Response
    {
        return $this->render('sash/chart/index.html.twig', [
            'controller_name' => 'ChartController',
        ]);
    }
}
