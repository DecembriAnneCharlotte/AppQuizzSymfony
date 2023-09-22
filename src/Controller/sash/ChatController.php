<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    #[Route('sash/chat', name: 'app_sash_chat')]
    public function index(): Response
    {
        return $this->render('sash/chat/index.html.twig', [
            'controller_name' => 'ChatController',
        ]);
    }
}
