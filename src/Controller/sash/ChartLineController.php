<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartLineController extends AbstractController
{
    #[Route('sash/chart-line', name: 'app_sash_chart_line')]
    public function index(): Response
    {
        return $this->render('sash/chart_line/index.html.twig', [
            'controller_name' => 'ChartLineController',
        ]);
    }
}
