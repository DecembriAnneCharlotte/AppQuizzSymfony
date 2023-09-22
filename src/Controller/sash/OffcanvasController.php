<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffcanvasController extends AbstractController
{
    #[Route('sash/offcanvas', name: 'app_sash_offcanvas')]
    public function index(): Response
    {
        return $this->render('sash/offcanvas/index.html.twig', [
            'controller_name' => 'OffcanvasController',
        ]);
    }
}
