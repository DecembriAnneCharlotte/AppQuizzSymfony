<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimelineController extends AbstractController
{
    #[Route('sash/timeline', name: 'app_sash_timeline')]
    public function index(): Response
    {
        return $this->render('sash/timeline/index.html.twig', [
            'controller_name' => 'TimelineController',
        ]);
    }
}
