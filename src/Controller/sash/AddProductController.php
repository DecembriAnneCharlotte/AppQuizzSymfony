<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddProductController extends AbstractController
{
    #[Route('sash/add-product', name: 'app_sash_add_product')]
    public function index(): Response
    {
        return $this->render('sash/add_product/index.html.twig', [
            'controller_name' => 'AddProductController',
        ]);
    }
}
