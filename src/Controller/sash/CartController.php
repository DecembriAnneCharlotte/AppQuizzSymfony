<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('sash/cart', name: 'app_sash_cart')]
    public function index(): Response
    {
        return $this->render('sash/cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
