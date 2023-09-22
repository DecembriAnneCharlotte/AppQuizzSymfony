<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThumbnailsController extends AbstractController
{
    #[Route('sash/thumbnails', name: 'app_sash_thumbnails')]
    public function index(): Response
    {
        return $this->render('sash/thumbnails/index.html.twig', [
            'controller_name' => 'ThumbnailsController',
        ]);
    }
}
