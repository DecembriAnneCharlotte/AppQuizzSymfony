<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('sash/checkout', name: 'app_sash_checkout')]
    public function index(): Response
    {
        return $this->render('sash/checkout/index.html.twig', [
            'controller_name' => 'CheckoutController',
        ]);
    }
}
