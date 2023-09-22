<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RibbonsController extends AbstractController
{
    #[Route('sash/ribbons', name: 'app_sash_ribbons')]
    public function index(): Response
    {
        return $this->render('sash/ribbons/index.html.twig', [
            'controller_name' => 'RibbonsController',
        ]);
    }
}
