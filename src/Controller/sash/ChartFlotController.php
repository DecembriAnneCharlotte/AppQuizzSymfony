<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartFlotController extends AbstractController
{
    #[Route('sash/chart-folt', name: 'app_sash_chart_flot')]
    public function index(): Response
    {
        return $this->render('sash/chart_flot/index.html.twig', [
            'controller_name' => 'ChartFlotController',
        ]);
    }
}
