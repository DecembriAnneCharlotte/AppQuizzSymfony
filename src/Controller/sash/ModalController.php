<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModalController extends AbstractController
{
    #[Route('sash/modal', name: 'app_sash_modal')]
    public function index(): Response
    {
        return $this->render('sash/modal/index.html.twig', [
            'controller_name' => 'ModalController',
        ]);
    }
}
