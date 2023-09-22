<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error403Controller extends AbstractController
{
    #[Route('sash/error403', name: 'app_sash_error403')]
    public function index(): Response
    {
        return $this->render('sash/error403/index.html.twig', [
            'controller_name' => 'Error403Controller',
        ]);
    }
}
