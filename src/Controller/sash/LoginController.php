<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('sash/login', name: 'app_sash_login')]
    public function index(): Response
    {
        return $this->render('sash/login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}


