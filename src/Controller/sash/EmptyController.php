<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmptyController extends AbstractController
{
    #[Route('sash/empty', name: 'app_sash_empty')]
    public function index(): Response
    {
        return $this->render('sash/empty/index.html.twig', [
            'controller_name' => 'EmptyController',
        ]);
    }
}
