<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TooltipandpopoverController extends AbstractController
{
    #[Route('sash/tooltipandpopover', name: 'app_sash_tooltipandpopover')]
    public function index(): Response
    {
        return $this->render('sash/tooltipandpopover/index.html.twig', [
            'controller_name' => 'TooltipandpopoverController',
        ]);
    }
}
