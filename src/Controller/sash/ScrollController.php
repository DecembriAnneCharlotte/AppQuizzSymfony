<?php

namespace App\Controller\sash;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScrollController extends AbstractController
{
    #[Route('sash/scroll', name: 'app_sash_scroll')]
    public function index(): Response
    {
        return $this->render('sash/scroll/index.html.twig', [
            'controller_name' => 'ScrollController',
        ]);
    }
}
