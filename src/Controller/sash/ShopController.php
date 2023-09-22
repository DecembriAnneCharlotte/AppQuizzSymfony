<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('sash/shop', name: 'app_sash_shop')]
    public function index(): Response
    {
        return $this->render('sash/shop/index.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
