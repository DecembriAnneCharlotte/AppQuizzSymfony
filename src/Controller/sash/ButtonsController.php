<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ButtonsController extends AbstractController
{
    #[Route('sash/buttons', name: 'app_sash_buttons')]
    public function index(): Response
    {
        return $this->render('sash/buttons/index.html.twig', [
            'controller_name' => 'ButtonsController',
        ]);
    }
}
