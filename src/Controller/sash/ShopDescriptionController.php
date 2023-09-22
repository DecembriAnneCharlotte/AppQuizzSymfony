<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopDescriptionController extends AbstractController
{
    #[Route('sash/shop-description', name: 'app_sash_shop_description')]
    public function index(): Response
    {
        return $this->render('sash/shop_description/index.html.twig', [
            'controller_name' => 'ShopDescriptionController',
        ]);
    }
}
