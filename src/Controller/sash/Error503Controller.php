<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error503Controller extends AbstractController
{
    #[Route('sash/error503', name: 'app_sash_error503')]
    public function index(): Response
    {
        return $this->render('sash/error503/index.html.twig', [
            'controller_name' => 'Error503Controller',
        ]);
    }
}
