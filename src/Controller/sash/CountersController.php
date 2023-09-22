<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountersController extends AbstractController
{
    #[Route('sash/counters', name: 'app_sash_counters')]
    public function index(): Response
    {
        return $this->render('sash/counters/index.html.twig', [
            'controller_name' => 'CountersController',
        ]);
    }
}
