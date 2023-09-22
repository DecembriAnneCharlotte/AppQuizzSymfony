<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons9Controller extends AbstractController
{
    #[Route('sash/icons9', name: 'app_sash_icons9')]
    public function index(): Response
    {
        return $this->render('sash/icons9/index.html.twig', [
            'controller_name' => 'Icons9Controller',
        ]);
    }
}
