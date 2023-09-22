<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    #[Route('sash/pricing', name: 'app_sash_pricing')]
    public function index(): Response
    {
        return $this->render('sash/pricing/index.html.twig', [
            'controller_name' => 'PricingController',
        ]);
    }
}
