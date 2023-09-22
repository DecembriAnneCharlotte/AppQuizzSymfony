<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('sash/', name: 'app_sash_home')]
    public function index(): Response
    {

        return $this->render('sash/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
