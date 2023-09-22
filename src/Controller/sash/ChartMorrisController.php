<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartMorrisController extends AbstractController
{
    #[Route('sash/chart-morris', name: 'app_sash_chart_morris')]
    public function index(): Response
    {
        return $this->render('sash/chart_morris/index.html.twig', [
            'controller_name' => 'ChartMorrisController',
        ]);
    }
}
