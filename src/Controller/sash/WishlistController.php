<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishlistController extends AbstractController
{
    #[Route('sash/wishlist', name: 'app_sash_wishlist')]
    public function index(): Response
    {
        return $this->render('sash/wishlist/index.html.twig', [
            'controller_name' => 'WishlistController',
        ]);
    }
}
