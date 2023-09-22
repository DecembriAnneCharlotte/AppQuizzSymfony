<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifyController extends AbstractController
{
    #[Route('sash/notify', name: 'app_sash_notify')]
    public function index(): Response
    {
        return $this->render('sash/notify/index.html.twig', [
            'controller_name' => 'NotifyController',
        ]);
    }
}
