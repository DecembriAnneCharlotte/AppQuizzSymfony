<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartChartistController extends AbstractController
{
    #[Route('sash/chart-chartist', name: 'app_sash_chart_chartist')]
    public function index(): Response
    {
        return $this->render('sash/chart_chartist/index.html.twig', [
            'controller_name' => 'ChartChartistController',
        ]);
    }
}
