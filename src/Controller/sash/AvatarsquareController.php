<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvatarsquareController extends AbstractController
{
    #[Route('sash/avatarsquare', name: 'app_sash_avatarsquare')]
    public function index(): Response
    {
        return $this->render('sash/avatarsquare/index.html.twig', [
            'controller_name' => 'AvatarsquareController',
        ]);
    }
}
