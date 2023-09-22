<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartEchartController extends AbstractController
{
    #[Route('sash/chart-echart', name: 'app_sash_chart_echart')]
    public function index(): Response
    {
        return $this->render('sash/chart_echart/index.html.twig', [
            'controller_name' => 'ChartEchartController',
        ]);
    }
}
