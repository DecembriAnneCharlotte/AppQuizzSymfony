<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('sash/profile', name: 'app_sash_profile')]
    public function index(): Response
    {
        return $this->render('sash/profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
