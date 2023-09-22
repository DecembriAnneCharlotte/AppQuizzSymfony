<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaginationController extends AbstractController
{
    #[Route('sash/pagination', name: 'app_sash_pagination')]
    public function index(): Response
    {
        return $this->render('sash/pagination/index.html.twig', [
            'controller_name' => 'PaginationController',
        ]);
    }
}
