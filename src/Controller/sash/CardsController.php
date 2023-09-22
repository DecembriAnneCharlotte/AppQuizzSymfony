<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardsController extends AbstractController
{
    #[Route('sash/cards', name: 'app_sash_cards')]
    public function index(): Response
    {
        return $this->render('sash/cards/index.html.twig', [
            'controller_name' => 'CardsController',
        ]);
    }
}
