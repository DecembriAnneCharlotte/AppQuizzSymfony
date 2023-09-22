<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvatarRoundController extends AbstractController
{
    #[Route('sash/avatar-round', name: 'app_sash_avatar_round')]
    public function index(): Response
    {
        return $this->render('sash/avatar_round/index.html.twig', [
            'controller_name' => 'AvatarRoundController',
        ]);
    }
}
