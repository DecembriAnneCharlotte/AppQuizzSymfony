<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Maps2Controller extends AbstractController
{
    #[Route('sash/maps2', name: 'app_sash_maps2')]
    public function index(): Response
    {
        return $this->render('sash/maps2/index.html.twig', [
            'controller_name' => 'Maps2Controller',
        ]);
    }
}
