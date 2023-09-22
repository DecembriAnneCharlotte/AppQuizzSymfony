<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetsController extends AbstractController
{
    #[Route('sash/widgets', name: 'app_sash_widgets')]
    public function index(): Response
    {
        return $this->render('sash/widgets/index.html.twig', [
            'controller_name' => 'WidgetsController',
        ]);
    }
}
