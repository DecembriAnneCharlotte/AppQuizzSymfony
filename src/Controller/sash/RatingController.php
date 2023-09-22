<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    #[Route('sash/rating', name: 'app_sash_rating')]
    public function index(): Response
    {
        return $this->render('sash/rating/index.html.twig', [
            'controller_name' => 'RatingController',
        ]);
    }
}
