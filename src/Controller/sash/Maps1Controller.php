<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Maps1Controller extends AbstractController
{
    #[Route('sash/maps1', name: 'app_sash_maps1')]
    public function index(): Response
    {
        return $this->render('sash/maps1/index.html.twig', [
            'controller_name' => 'Maps1Controller',
        ]);
    }
}
