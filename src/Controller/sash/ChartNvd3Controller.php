<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartNvd3Controller extends AbstractController
{
    #[Route('sash/chart-nvd3', name: 'app_sash_chart_nvd3')]
    public function index(): Response
    {
        return $this->render('sash/chart_nvd3/index.html.twig', [
            'controller_name' => 'ChartNvd3Controller',
        ]);
    }
}
