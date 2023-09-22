<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToastController extends AbstractController
{
    #[Route('sash/toast', name: 'app_sash_toast')]
    public function index(): Response
    {
        return $this->render('sash/toast/index.html.twig', [
            'controller_name' => 'ToastController',
        ]);
    }
}
