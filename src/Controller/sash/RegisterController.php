<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('sash/register', name: 'app_sash_register')]
    public function index(): Response
    {
        return $this->render('sash/register/index.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }
}
