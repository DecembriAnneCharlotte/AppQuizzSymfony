<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons4Controller extends AbstractController
{
    #[Route('sash/icons4', name: 'app_sash_icons4')]
    public function index(): Response
    {
        return $this->render('sash/icons4/index.html.twig', [
            'controller_name' => 'Icons4Controller',
        ]);
    }
}
