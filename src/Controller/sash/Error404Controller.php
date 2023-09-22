<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error404Controller extends AbstractController
{
    #[Route('sash/error404', name: 'app_sash_error404')]
    public function index(): Response
    {
        return $this->render('sash/error404/index.html.twig', [
            'controller_name' => 'Error404Controller',
        ]);
    }
}
