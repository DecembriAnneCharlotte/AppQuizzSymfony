<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    #[Route('sash/gallery', name: 'app_sash_gallery')]
    public function index(): Response
    {
        return $this->render('sash/gallery/index.html.twig', [
            'controller_name' => 'GalleryController',
        ]);
    }
}
