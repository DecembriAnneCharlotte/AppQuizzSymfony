<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('sash/search', name: 'app_sash_search')]
    public function index(): Response
    {
        return $this->render('sash/search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }
}
