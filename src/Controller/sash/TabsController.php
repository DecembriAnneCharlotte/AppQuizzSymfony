<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabsController extends AbstractController
{
    #[Route('sash/tabs', name: 'app_sash_tabs')]
    public function index(): Response
    {
        return $this->render('sash/tabs/index.html.twig', [
            'controller_name' => 'TabsController',
        ]);
    }
}
