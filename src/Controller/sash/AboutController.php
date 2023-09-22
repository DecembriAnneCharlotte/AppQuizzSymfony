<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('sash/about', name: 'app_sash_about')]
    public function index(): Response
    {
        return $this->render('sash/about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
