<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgressController extends AbstractController
{
    #[Route('sash/progress', name: 'app_sash_progress')]
    public function index(): Response
    {
        return $this->render('sash/progress/index.html.twig', [
            'controller_name' => 'ProgressController',
        ]);
    }
}
