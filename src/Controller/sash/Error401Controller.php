<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error401Controller extends AbstractController
{
    #[Route('sash/error401', name: 'app_sash_error401')]
    public function index(): Response
    {
        return $this->render('sash/error401/index.html.twig', [
            'controller_name' => 'Error401Controller',
        ]);
    }
}
