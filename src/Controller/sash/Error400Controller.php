<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error400Controller extends AbstractController
{
    #[Route('sash/error400', name: 'app_sash_error400')]
    public function index(): Response
    {
        return $this->render('sash/error400/index.html.twig', [
            'controller_name' => 'Error400Controller',
        ]);
    }
}
