<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlertsController extends AbstractController
{
    #[Route('sash/alerts', name: 'app_sash_alerts')]
    public function index(): Response
    {
        return $this->render('sash/alerts/index.html.twig', [
            'controller_name' => 'AlertsController',
        ]);
    }
}
