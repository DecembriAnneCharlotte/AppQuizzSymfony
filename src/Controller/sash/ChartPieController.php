<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartPieController extends AbstractController
{
    #[Route('sash/chart-pie', name: 'app_sash_chart_pie')]
    public function index(): Response
    {
        return $this->render('sash/chart_pie/index.html.twig', [
            'controller_name' => 'ChartPieController',
        ]);
    }
}
