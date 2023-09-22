<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartDonutController extends AbstractController
{
    #[Route('sash/chart-donut', name: 'app_sash_chart_donut')]
    public function index(): Response
    {
        return $this->render('sash/chart_donut/index.html.twig', [
            'controller_name' => 'ChartDonutController',
        ]);
    }
}
