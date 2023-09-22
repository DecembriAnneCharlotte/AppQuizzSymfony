<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvatarRadiusController extends AbstractController
{
    #[Route('sash/avatar-radius', name: 'app_sash_avatar_radius')]
    public function index(): Response
    {
        return $this->render('sash/avatar_radius/index.html.twig', [
            'controller_name' => 'AvatarRadiusController',
        ]);
    }
}
