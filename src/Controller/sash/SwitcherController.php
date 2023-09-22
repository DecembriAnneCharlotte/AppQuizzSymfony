<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SwitcherController extends AbstractController
{
    #[Route('sash/switcher', name: 'app_sash_switcher')]
    public function index(): Response
    {
        return $this->render('sash/switcher/index.html.twig', [
            'controller_name' => 'SwitcherController',
        ]);
    }
}
