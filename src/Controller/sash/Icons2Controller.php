<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons2Controller extends AbstractController
{
    #[Route('sash/icons2', name: 'app_sash_icons2')]
    public function index(): Response
    {
        return $this->render('sash/icons2/index.html.twig', [
            'controller_name' => 'Icons2Controller',
        ]);
    }
}
