<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorsController extends AbstractController
{
    #[Route('sash/colors', name: 'app_sash_colors')]
    public function index(): Response
    {
        return $this->render('sash/colors/index.html.twig', [
            'controller_name' => 'ColorsController',
        ]);
    }
}
