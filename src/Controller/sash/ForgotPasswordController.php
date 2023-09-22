<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForgotPasswordController extends AbstractController
{
    #[Route('sash/forgot-password', name: 'app_sash_forgot_password')]
    public function index(): Response
    {
        return $this->render('sash/forgot_password/index.html.twig', [
            'controller_name' => 'ForgotPasswordController',
        ]);
    }
}
