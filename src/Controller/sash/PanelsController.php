<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanelsController extends AbstractController
{
    #[Route('sash/panels', name: 'app_sash_panels')]
    public function index(): Response
    {
        return $this->render('sash/panels/index.html.twig', [
            'controller_name' => 'PanelsController',
        ]);
    }
}
