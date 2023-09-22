<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarouselController extends AbstractController
{
    #[Route('sash/carousel', name: 'app_sash_carousel')]
    public function index(): Response
    {
        return $this->render('sash/carousel/index.html.twig', [
            'controller_name' => 'CarouselController',
        ]);
    }
}
