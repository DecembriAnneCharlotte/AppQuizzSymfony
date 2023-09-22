<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IconsController extends AbstractController
{
    #[Route('sash/icons', name: 'app_sash_icons')]
    public function index(): Response
    {
        return $this->render('sash/icons/index.html.twig', [
            'controller_name' => 'IconsController',
        ]);
    }
}
